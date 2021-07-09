<?php

declare(strict_types=1);

namespace Psg\Psr100\Factory;

use Psg\Psr100\{ServerRequest};
use Psg\Http\Message\{ServerRequestInterface};

trait ServerRequestFactoryTrait
{
    public function createServerRequest(string $method, $uri, array $serverParams = []): ServerRequestInterface
    {
        return new ServerRequest($method, $uri, [], null, '1.1', $serverParams);
    }
}
