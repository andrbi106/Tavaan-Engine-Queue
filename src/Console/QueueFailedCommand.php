<?php

declare(strict_types=1);

namespace Tavaan\Engine\Queue\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * queue:failed command.
 */
final class QueueFailedCommand implements CommandInterface
{
    public function name(): string
    {
        return 'queue:failed';
    }

    public function description(): string
    {
        return 'Run queue:failed (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
