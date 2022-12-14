<?php

declare(strict_types=1);

namespace Chronhub\Testing\Stubs;

use Symfony\Component\Uid\Uuid;
use Chronhub\Contracts\Aggregate\Identity;
use Chronhub\Aggregate\HasAggregateIdentity;

final class AggregateIdStub implements Identity
{
    use HasAggregateIdentity;

    public static function create(): self|Identity
    {
        return new self(Uuid::v4());
    }
}
