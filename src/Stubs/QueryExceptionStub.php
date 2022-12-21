<?php

declare(strict_types=1);

namespace Chronhub\Testing\Stubs;

use Illuminate\Database\QueryException;
use Chronhub\Testing\Double\Message\SomeException;

final class QueryExceptionStub extends QueryException
{
    public static function withCode(string $code): self
    {
        $previousException = new SomeException('a query exception occured');
        $previousException->setCodeAsString($code);

        return new self('some_sql', [], $previousException);
    }
}
