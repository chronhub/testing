<?php

declare(strict_types=1);

namespace Chronhub\Testing\Double\Message;

use Chronhub\Message\Domain;
use Chronhub\Contracts\Message\DomainCommand;
use Chronhub\Message\HasConstructableContent;

final class AnotherCommand extends Domain implements DomainCommand
{
    use HasConstructableContent;
}
