<?php
declare(strict_types=1);
namespace Tavaan\Engine\Queue;

final class Job
{
    public function __construct(
        public readonly string $id,
        public readonly string $queue,
        public readonly mixed $payload,
        public int $attempts = 0,
        public ?int $availableAt = null,
        public ?int $reservedAt = null,
    ) {
        $this->availableAt ??= time();
    }

    public function isReserved(): bool { return $this->reservedAt !== null; }
    public function isAvailable(): bool { return !$this->isReserved() && $this->availableAt !== null && $this->availableAt <= time(); }
    public function incrementAttempts(): void { $this->attempts++; }
}

final class QueueManager
{
    private array $queues = [];

    public function __construct(private readonly array $config = [])
    {
        $default = $config['default'] ?? 'default';
        $this->queues[$default] = [];
        foreach ($config['queues'] ?? [] as $name => $_) { $this->queues[$name] = []; }
    }

    public function push(string $queue, mixed $payload): string
    {
        $id = bin2hex(random_bytes(16));
        $job = new Job($id, $queue, $payload);
        $this->queues[$queue] ??= [];
        $this->queues[$queue][] = $job;
        return $id;
    }

    public function pop(string $queue): ?Job
    {
        $this->queues[$queue] ??= [];
        foreach ($this->queues[$queue] as $i => $job) {
            if ($job->isAvailable()) {
                $job->reservedAt = time();
                $job->incrementAttempts();
                return $job;
            }
        }
        return null;
    }

    public function release(Job $job, int $delay = 0): void
    {
        $job->reservedAt = null;
        $job->availableAt = time() + $delay;
    }

    public function delete(Job $job): void
    {
        $this->queues[$job->queue] ??= [];
        foreach ($this->queues[$job->queue] as $i => $j) { if ($j->id === $job->id) { array_splice($this->queues[$job->queue], $i, 1); break; } }
    }

    public function size(string $queue = 'default'): int { return count($this->queues[$queue] ?? []); }
    public function getQueues(): array { return array_keys($this->queues); }
    public function clear(string $queue): void { $this->queues[$queue] = []; }
}

final class QueueServiceProvider
{
    private ?QueueManager $manager = null;
    public function __construct(private readonly array $config = []) {}
    public function register(): void { $this->manager = new QueueManager($this->config); }
    public function boot(): void {}
    public function provides(): array { return [QueueManager::class, Job::class]; }
    public function getManager(): QueueManager { if ($this->manager === null) $this->register(); return $this->manager; }

    public function batch(/* ... */): mixed
    {
        return null;
    }
    public function chain(/* ... */): mixed
    {
        return null;
    }
    public function connection(/* ... */): mixed
    {
        return null;
    }
    public function later(/* ... */): mixed
    {
        return null;
    }
    public function pushOn(/* ... */): mixed
    {
        return $this;
    }
}
