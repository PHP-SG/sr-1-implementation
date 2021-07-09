<?php

declare(strict_types=1);

namespace Psg\Psr100\Factory;

use Psg\Psr100\{UploadedFile};
use Psg\Http\Message\{UploadedFileInterface};

trait UploadedFileFactoryTrait
{
    public function createUploadedFile(\Psr\Http\Message\StreamInterface $stream, int $size = null, int $error = \UPLOAD_ERR_OK, string $clientFilename = null, string $clientMediaType = null): UploadedFileInterface
    {
        if (null === $size) {
            $size = $stream->getSize();
        }

        return new UploadedFile($stream, $size, $error, $clientFilename, $clientMediaType);
    }
}
