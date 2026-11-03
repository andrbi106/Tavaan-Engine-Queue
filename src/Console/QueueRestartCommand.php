<?php

declare(strict_types=1);

namespace Tavaan\Engine\Queue\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * queue:restart command.
 */
final class QueueRestartCommand implements CommandInterface
{
    public function name(): string
    {
        return 'queue:restart';
    }

    public function description(): string
    {
        return 'Run queue:restart (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
