<?php

declare(strict_types=1);

namespace Chronhub\Testing\Double\Message;

use Chronhub\Message\Domain;
use Chronhub\Contracts\Message\AsyncMessage;
use Chronhub\Contracts\Message\DomainCommand;
use Chronhub\Message\HasConstructableContent;

final class AnotherAsyncCommand extends Domain implements DomainCommand, AsyncMessage
{
    use HasConstructableContent;
}
