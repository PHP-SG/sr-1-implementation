<?php

declare(strict_types=1);

namespace Tests\Psg\Psr100\Integration;

use Psg\Psr100\Response;
use Http\Psr7Test\ResponseIntegrationTest;

class ResponseTest extends ResponseIntegrationTest
{
    public function createSubject()
    {
        return new Response();
    }
}
