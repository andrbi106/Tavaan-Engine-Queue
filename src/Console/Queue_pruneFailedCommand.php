<?php

declare(strict_types=1);

namespace Tavaan\Engine\Queue\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * queue:prune-failed command.
 */
final class Queue_pruneFailedCommand implements CommandInterface
{
    public function name(): string
    {
        return 'queue:prune-failed';
    }

    public function description(): string
    {
        return 'Run queue:prune-failed (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
