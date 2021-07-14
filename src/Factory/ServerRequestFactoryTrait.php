<?php

declare(strict_types=1);

namespace Psg\Sr1\Implementation\Factory;

use Psg\Sr1\Implementation\{ServerRequest};
use Psg\Sr1\{ServerRequestInterface};

trait ServerRequestFactoryTrait
{
    public function createServerRequest(string $method, $uri, array $serverParams = []): ServerRequestInterface
    {
        return new ServerRequest($method, $uri, [], null, '1.1', $serverParams);
    }
}
