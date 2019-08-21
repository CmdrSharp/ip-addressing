<?php

namespace CmdrSharp\IpAddressing\Exceptions;

use InvalidArgumentException;

class InvalidIpException extends InvalidArgumentException
{
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
