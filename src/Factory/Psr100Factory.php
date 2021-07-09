<?php

declare(strict_types=1);

namespace Psg\Psr100\Factory;

use Psg\Http\Message\{RequestFactoryInterface, ResponseFactoryInterface, ServerRequestFactoryInterface, StreamFactoryInterface, UploadedFileFactoryInterface, UriFactoryInterface};

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 * @author Martijn van der Ven <martijn@vanderven.se>
 *
 * @final This class should never be extended. See https://github.com/Nyholm/psr7/blob/master/doc/final.md
 */
class Psr100Factory implements RequestFactoryInterface, ResponseFactoryInterface, ServerRequestFactoryInterface, StreamFactoryInterface, UploadedFileFactoryInterface, UriFactoryInterface
{
    use RequestFactoryTrait;
    use ResponseFactoryTrait;
    use ServerRequestFactoryTrait;
    use StreamFactoryTrait;
    use UploadedFileFactoryTrait;
    use UriFactoryTrait;
}
