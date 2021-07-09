<?php

declare(strict_types=1);

namespace Tests\Psg\Psr100\Integration;

use Psg\Psr100\Request;
use Http\Psr7Test\RequestIntegrationTest;

class RequestTest extends RequestIntegrationTest
{
    public function createSubject()
    {
        return new Request('GET', '/');
    }
}
