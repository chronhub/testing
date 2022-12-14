<?php

declare(strict_types=1);

namespace Chronhub\Testing\Double;

use Chronhub\Message\Domain;
use Chronhub\Contracts\Message\DomainQuery;
use Chronhub\Message\HasConstructableContent;

final class AnotherQuery extends Domain implements DomainQuery
{
    use HasConstructableContent;
}
