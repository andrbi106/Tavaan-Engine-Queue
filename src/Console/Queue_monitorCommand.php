<?php

declare(strict_types=1);

namespace Tavaan\Engine\Queue\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * queue:monitor command.
 */
final class Queue_monitorCommand implements CommandInterface
{
    public function name(): string
    {
        return 'queue:monitor';
    }

    public function description(): string
    {
        return 'Run queue:monitor (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
