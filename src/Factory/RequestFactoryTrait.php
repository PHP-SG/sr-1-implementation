<?php

declare(strict_types=1);

namespace Psg\Sr1\Implementation\Factory;

use Psg\Sr1\Implementation\{Request};
use Psg\Sr1\{RequestInterface};

trait RequestFactoryTrait
{
    public function createRequest(string $method, $uri): RequestInterface
    {
        return new Request($method, $uri);
    }
}
