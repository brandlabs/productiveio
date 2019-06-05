<?php

namespace Brandlabs\Productiveio\Exceptions;

use \Exception;

/**
 * Base Exception class for all Productive.io API Request exceptions
 *
 * @package Brandlabs\Productiveio\Exceptions
 */
class ProductiveioRequestException extends Exception implements ProductiveioExceptionInterface
{
    public function __construct($message = null, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
