<?php

declare(strict_types=1);

namespace Psg\Sr1\Implementation\Factory;

use Psg\Sr1\{RequestFactoryInterface, ResponseFactoryInterface, ServerRequestFactoryInterface, StreamFactoryInterface, UploadedFileFactoryInterface, UriFactoryInterface};

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 * @author Martijn van der Ven <martijn@vanderven.se>
 *
 * @final This class should never be extended. See https://github.com/Nyholm/psr7/blob/master/doc/final.md
 */
class Sr1Factory implements RequestFactoryInterface, ResponseFactoryInterface, ServerRequestFactoryInterface, StreamFactoryInterface, UploadedFileFactoryInterface, UriFactoryInterface
{
    use RequestFactoryTrait;
    use ResponseFactoryTrait;
    use ServerRequestFactoryTrait;
    use StreamFactoryTrait;
    use UploadedFileFactoryTrait;
    use UriFactoryTrait;
}
