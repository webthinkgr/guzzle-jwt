<?php

declare(strict_types=1);

namespace Webthink\GuzzleJwt\Storage;

use Webthink\GuzzleJwt\StorageInterface;
use Webthink\GuzzleJwt\TokenInterface;

/**
 * @author George Mponos <gmponos@xm.com>
 */
final class MemoryStorage implements StorageInterface
{
    /**
     * @var TokenInterface|null
     */
    private $store = null;

    /**
     * @return TokenInterface|null
     */
    public function getToken()
    {
        return $this->store;
    }

    /**
     * @param TokenInterface $token
     * @return void
     */
    public function storeToken(TokenInterface $token)
    {
        $this->store = $token;
    }
}
