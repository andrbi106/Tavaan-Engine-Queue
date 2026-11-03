<?php

declare(strict_types=1);

namespace Tavaan\Engine\Queue\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * queue:flush command.
 */
final class QueueFlushCommand implements CommandInterface
{
    public function name(): string
    {
        return 'queue:flush';
    }

    public function description(): string
    {
        return 'Run queue:flush (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
