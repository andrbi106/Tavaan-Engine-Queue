<?php

declare(strict_types=1);

namespace Tavaan\Engine\Queue\Contracts;

/**
 * قرارداد QueueManager.
 *
 * @see \Tavaan\Engine\Queue\QueueManager
 * @api 1.0
 */
interface QueueManagerInterface
{
    /**
     * متد push.
     *
     * @return mixed
     */
    public function push(/* ... */): mixed;

    /**
     * متد later.
     *
     * @return mixed
     */
    public function later(/* ... */): mixed;

    /**
     * متد pushOn.
     *
     * @return mixed
     */
    public function pushOn(/* ... */): mixed;

    /**
     * متد batch.
     *
     * @return mixed
     */
    public function batch(/* ... */): mixed;

    /**
     * متد chain.
     *
     * @return mixed
     */
    public function chain(/* ... */): mixed;

    /**
     * متد size.
     *
     * @return mixed
     */
    public function size(/* ... */): mixed;

    /**
     * متد connection.
     *
     * @return mixed
     */
    public function connection(/* ... */): mixed;
}