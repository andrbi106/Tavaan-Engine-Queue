<?php

declare(strict_types=1);

namespace Tavaan\Engine\Queue\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * queue:listen command.
 */
final class Queue_listenCommand implements CommandInterface
{
    public function name(): string
    {
        return 'queue:listen';
    }

    public function description(): string
    {
        return 'Run queue:listen (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
