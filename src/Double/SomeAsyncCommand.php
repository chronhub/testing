<?php

declare(strict_types=1);

namespace Chronhub\Testing\Double;

use Chronhub\Message\Domain;
use Chronhub\Contracts\Message\AsyncMessage;
use Chronhub\Contracts\Message\DomainCommand;
use Chronhub\Message\HasConstructableContent;

final class SomeAsyncCommand extends Domain implements DomainCommand, AsyncMessage
{
    use HasConstructableContent;
}