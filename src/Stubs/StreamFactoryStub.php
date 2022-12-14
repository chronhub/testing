<?php

declare(strict_types=1);

namespace Chronhub\Testing\Stubs;

use Chronhub\Contracts\Stream\Stream;
use Chronhub\Contracts\Stream\Factory;
use Chronhub\Contracts\Stream\StreamName;

final class StreamFactoryStub implements Factory
{
    public function __invoke(StreamName|string $streamName, iterable $streamEvents = []): Stream
    {
        if ($streamName instanceof StreamName) {
            $streamName = $streamName->name();
        }

        return new StreamStub(new StreamNameStub($streamName), $streamEvents);
    }
}
