<?php

namespace Hascamp\Exceptions;

use Exception;
use Hascamp\Exceptions\Supports\UseException;
use Hascamp\Exceptions\Contracts\Exceptionable;

abstract class HascampException extends Exception implements Exceptionable
{
    use UseException;

    protected $logLevelDefault = "error";
    protected $logMessageDefault = "Error Exception.";
}