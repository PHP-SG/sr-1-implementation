<?php

declare(strict_types=1);

namespace Tests\Psg\Psr100\Integration;

use Psg\Psr100\ServerRequest;
use Http\Psr7Test\ServerRequestIntegrationTest;

class ServerRequestTest extends ServerRequestIntegrationTest
{
    public function createSubject()
    {
        $_SERVER['REQUEST_METHOD'] = 'GET';

        return new ServerRequest('GET', '/', [], null, '1.1', $_SERVER);
    }
}
