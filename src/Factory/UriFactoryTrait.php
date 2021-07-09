<?php

declare(strict_types=1);

namespace Psg\Psr100\Factory;

use Psg\Psr100\{Uri};
use Psg\Http\Message\{UriInterface};

trait UriFactoryTrait
{
    public function createUri(string $uri = ''): UriInterface
    {
        return new Uri($uri);
    }
}
