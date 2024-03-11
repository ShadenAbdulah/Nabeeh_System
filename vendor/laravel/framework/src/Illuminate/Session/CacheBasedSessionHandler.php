<?php

namespace Illuminate\Session;

use Illuminate\Contracts\Cache\Repository as CacheContract;
use SessionHandlerInterface;

class CacheBasedSessionHandler implements SessionHandlerInterface
{
    /**
     * The cache repository instance.
     *
     * @var CacheContract
     */
    protected $cache;

    /**
     * The number of minutes to store the data in the cache.
     *
     * @var int
     */
    protected $minutes;

    /**
     * Create a new cache driven handler instance.
     *
     * @param CacheContract $cache
     * @param  int  $minutes
     * @return void
     */
    public function __construct(CacheContract $cache, $minutes)
    {
        $this->cache = $cache;
        $this->minutes = $minutes;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function open($savePath, $sessionName): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function close(): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function read($sessionId): string
    {
        return $this->cache->get($sessionId, '');
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function write($sessionId, $data): bool
    {
        return $this->cache->put($sessionId, $data, $this->minutes * 60);
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function destroy($sessionId): bool
    {
        return $this->cache->forget($sessionId);
    }

    /**
     * {@inheritdoc}
     *
     * @return int
     */
    public function gc($lifetime): int
    {
        return 0;
    }

    /**
     * Get the underlying cache repository.
     *
     * @return CacheContract
     */
    public function getCache()
    {
        return $this->cache;
    }
}
