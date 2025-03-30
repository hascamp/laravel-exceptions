<?php

namespace Hascamp\Exceptions\Contracts;

interface Exceptionable
{
    public function __construct(
        string $message = '',
        array|int $code = 0,
        array $error = [],
    );

    public function report(): void;
}