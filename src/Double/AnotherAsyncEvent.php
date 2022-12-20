<?php

declare(strict_types=1);

namespace Chronhub\Testing\Double;

use Chronhub\Message\Domain;
use Chronhub\Contracts\Message\DomainEvent;
use Chronhub\Contracts\Message\AsyncMessage;
use Chronhub\Message\HasConstructableContent;

final class AnotherAsyncEvent extends Domain implements DomainEvent, AsyncMessage
{
    use HasConstructableContent;
}
