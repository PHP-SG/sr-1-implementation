<?php

declare(strict_types=1);

namespace Psg\Sr1\Implementation;

use Psg\Sr1\{RequestFactoryInterface, ResponseFactoryInterface, ServerRequestFactoryInterface, StreamFactoryInterface, UploadedFileFactoryInterface, UriFactoryInterface};

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 * @author Martijn van der Ven <martijn@vanderven.se>
 *
 * @final This class should never be extended. See https://github.com/Nyholm/psr7/blob/master/doc/final.md
 */
class Factory implements RequestFactoryInterface, ResponseFactoryInterface, ServerRequestFactoryInterface, StreamFactoryInterface, UploadedFileFactoryInterface, UriFactoryInterface
{
    use Factory\RequestFactoryTrait;
    use Factory\ResponseFactoryTrait;
    use Factory\ServerRequestFactoryTrait;
    use Factory\StreamFactoryTrait;
    use Factory\UploadedFileFactoryTrait;
    use Factory\UriFactoryTrait;
}
