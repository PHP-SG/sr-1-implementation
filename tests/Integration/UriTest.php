<?php

declare(strict_types=1);

namespace Tests\Psg\Psr100\Integration;

use Psg\Psr100\Uri;
use Http\Psr7Test\UriIntegrationTest;

class UriTest extends UriIntegrationTest
{
    public function createUri($uri)
    {
        return new Uri($uri);
    }
}
