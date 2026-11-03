<?php

declare(strict_types=1);

namespace Tavaan\Engine\Queue\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * queue:retry command.
 */
final class QueueRetryCommand implements CommandInterface
{
    public function name(): string
    {
        return 'queue:retry';
    }

    public function description(): string
    {
        return 'Run queue:retry (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
