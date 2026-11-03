<?php

declare(strict_types=1);

namespace Tavaan\Engine\Queue\Contracts;

/**
 * قرارداد Worker.
 *
 * @see \Tavaan\Engine\Queue\Worker
 * @api 1.0
 */
interface WorkerInterface
{
    /**
     * متد run.
     *
     * @return mixed
     */
    public function run(/* ... */): mixed;

    /**
     * متد stop.
     *
     * @return mixed
     */
    public function stop(/* ... */): mixed;

    /**
     * متد daemon.
     *
     * @return mixed
     */
    public function daemon(/* ... */): mixed;
}