<?php

declare(strict_types=1);

namespace Chronhub\Testing;

use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

abstract class ProphecyTest extends TestCase
{
    use ProphecyTrait;
}
