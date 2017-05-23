<?php

namespace Wearescytale\CompaniesHouseBundle\Exception;

use Exception;
use Throwable;

/**
 * Class CompaniesHouseException
 */
class CompaniesHouseException extends Exception
{
    /**
     * CompaniesHouseException constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}