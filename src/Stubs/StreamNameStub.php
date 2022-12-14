<?php

declare(strict_types=1);

namespace Chronhub\Testing\Stubs;

use Chronhub\Contracts\Stream\StreamName;

final class StreamNameStub implements StreamName
{
    public function __construct(public readonly string $name)
    {
    }

    public function name(): string
    {
        return $this->name;
    }

    public function __toString()
    {
        return $this->name();
    }
}
