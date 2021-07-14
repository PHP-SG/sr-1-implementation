<?php

declare(strict_types=1);

namespace Psg\Sr1\Implementation\Factory;

use Psg\Sr1\Implementation\Stream;
use Psg\Sr1\StreamInterface;

trait StreamFactoryTrait
{
    public function createStream(string $content = ''): StreamInterface
    {
        return Stream::defaultCreate($content);
    }

    public function createStreamFromFile(string $filename, string $mode = 'r'): StreamInterface
    {
        try {
            $resource = @\fopen($filename, $mode);
        } catch (\Throwable $e) {
            throw new \RuntimeException(\sprintf('The file "%s" cannot be opened.', $filename));
        }

        if (false === $resource) {
            if ('' === $mode || false === \in_array($mode[0], ['r', 'w', 'a', 'x', 'c'], true)) {
                throw new \InvalidArgumentException(\sprintf('The mode "%s" is invalid.', $mode));
            }

            throw new \RuntimeException(\sprintf('The file "%s" cannot be opened.', $filename));
        }

        return Stream::defaultCreate($resource);
    }

    public function createStreamFromResource($resource): StreamInterface
    {
        return Stream::defaultCreate($resource);
    }
}
