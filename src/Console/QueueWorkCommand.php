<?php

declare(strict_types=1);

namespace Tavaan\Engine\Queue\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * queue:work command.
 */
final class QueueWorkCommand implements CommandInterface
{
    public function name(): string
    {
        return 'queue:work';
    }

    public function description(): string
    {
        return 'Run queue:work (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
