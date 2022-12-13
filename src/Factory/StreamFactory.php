<?php

declare(strict_types=1);

namespace Chronhub\Testing\Factory;

use Chronhub\Stream\GenericStream;
use Chronhub\Contracts\Stream\Stream;
use Chronhub\Contracts\Stream\Factory;
use Chronhub\Stream\GenericStreamName;
use Chronhub\Contracts\Stream\StreamName;

final class StreamFactory implements Factory
{
    public function __invoke(StreamName|string $streamName, iterable $streamEvents = []): Stream
    {
        if ($streamName instanceof StreamName) {
            $streamName = $streamName->name();
        }

        return new GenericStream(new GenericStreamName($streamName), $streamEvents);
    }
}
