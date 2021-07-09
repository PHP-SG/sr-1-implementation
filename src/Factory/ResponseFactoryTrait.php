<?php

declare(strict_types=1);

namespace Psg\Psr100\Factory;

use Psg\Psr100\{Response};
use Psg\Http\Message\{ResponseInterface};

trait ResponseFactoryTrait
{
    public function createResponse(int $code = 200, string $reasonPhrase = ''): ResponseInterface
    {
        if (2 > \func_num_args()) {
            // This will make the Response class to use a custom reasonPhrase
            $reasonPhrase = null;
        }

        return new Response($code, [], null, '1.1', $reasonPhrase);
    }
}
