<?php

declare(strict_types=1);

namespace Chronhub\Testing\Double;

use Chronhub\Message\Domain;
use Chronhub\Contracts\Message\DomainEvent;
use Chronhub\Message\HasConstructableContent;

final class AnotherEvent extends Domain implements DomainEvent
{
    use HasConstructableContent;
}
