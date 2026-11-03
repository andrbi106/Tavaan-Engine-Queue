<?php

declare(strict_types=1);

namespace Tavaan\Engine\Queue;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Worker — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Queue\Contracts\WorkerInterface
 */
final class Worker implements Contracts\WorkerInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function run(/* ... */): mixed
    {
        // TODO: پیاده‌سازی run مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function stop(/* ... */): mixed
    {
        // TODO: پیاده‌سازی stop مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function daemon(/* ... */): mixed
    {
        // TODO: پیاده‌سازی daemon مطابق مستندات (سند §3 API).
        return null;
    }
}