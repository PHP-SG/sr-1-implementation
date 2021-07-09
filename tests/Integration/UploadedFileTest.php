<?php

declare(strict_types=1);

namespace Tests\Psg\Psr100\Integration;

use Psg\Psr100\Factory\Psr100Factory;
use Psg\Psr100\Stream;
use Http\Psr7Test\UploadedFileIntegrationTest;

class UploadedFileTest extends UploadedFileIntegrationTest
{
    public function createSubject()
    {
        return (new Psr100Factory())->createUploadedFile(Stream::defaultCreate('writing to tempfile'));
    }
}
