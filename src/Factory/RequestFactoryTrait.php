<?php

declare(strict_types=1);

namespace Psg\Psr100\Factory;

use Psg\Psr100\{Request};
use Psg\Http\Message\{RequestInterface};

trait RequestFactoryTrait
{
    public function createRequest(string $method, $uri): RequestInterface
    {
        return new Request($method, $uri);
    }
}
