<?php

declare(strict_types=1);

namespace Chronhub\Testing\Double;

use Chronhub\Message\Domain;
use Chronhub\Contracts\Message\DomainCommand;
use Chronhub\Message\HasConstructableContent;

final class SomeCommand extends Domain implements DomainCommand
{
    use HasConstructableContent;
}
