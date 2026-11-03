<?php

declare(strict_types=1);

namespace Tavaan\Engine\Queue;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Queue\Contracts\QueueManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * QueueManagerServiceProvider — ثبت سرویس‌های موتور QueueManager.
 */
final class QueueManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(QueueManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new QueueManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('queue', $this->app->get(QueueManagerInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Queue\Console\Queue_workCommand::class;
        $this->commands[] = \Tavaan\Engine\Queue\Console\Queue_listenCommand::class;
        $this->commands[] = \Tavaan\Engine\Queue\Console\Queue_restartCommand::class;
        $this->commands[] = \Tavaan\Engine\Queue\Console\Queue_retryCommand::class;
        $this->commands[] = \Tavaan\Engine\Queue\Console\Queue_failedCommand::class;
        $this->commands[] = \Tavaan\Engine\Queue\Console\Queue_flushCommand::class;
        $this->commands[] = \Tavaan\Engine\Queue\Console\Queue_pruneFailedCommand::class;
        $this->commands[] = \Tavaan\Engine\Queue\Console\Queue_monitorCommand::class;

        // ثبت درایورها (در صورت نیاز)
        // درایورها به‌صورت lazy در زمان استفاده ساخته می‌شوند.

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            QueueManagerInterface::class,
            'queue',
        ];
    }
}