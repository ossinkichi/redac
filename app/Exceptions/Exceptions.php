<?php

namespace App\Exceptions;

use RuntimeException;
use Throwable;

class Exceptions
{
    public static function fromMessage(Throwable $throwable): RuntimeException
    {
        return new RuntimeException(
            message: $throwable->getMessage(),
            code: $throwable->getCode(),
            previous: $throwable
        );
    }
}
