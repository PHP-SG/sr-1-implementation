<?php

declare(strict_types=1);

namespace Psg\Sr1\Implementation\Factory;

use Psg\Sr1\Implementation\{Uri};
use Psg\Sr1\{UriInterface};

trait UriFactoryTrait
{
    public function createUri(string $uri = ''): UriInterface
    {
        return new Uri($uri);
    }
}
