<?php

declare(strict_types=1);

namespace Tests\Psg\Psr100\Integration;

use Psg\Psr100\Stream;
use Http\Psr7Test\StreamIntegrationTest;

class StreamTest extends StreamIntegrationTest
{
    public function createStream($data)
    {
        return Stream::defaultCreate($data);
    }
}
