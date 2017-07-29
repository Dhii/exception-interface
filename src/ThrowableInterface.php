<?php

namespace Dhii\Exception;

use Exception as RootException;

/**
 * Formalizes the interface of exceptions and errors.
 * 
 * Primarily, this is necessary to formally depend on exception methods before
 * PHP 7.0, which introduces the {@link http://php.net/manual/en/class.throwable.php Throwable}
 * interface.
 *
 * @since [*next-version*]
 */
interface ThrowableInterface
{
    /**
     * @since [*next-version*]
     *
     * @return string|Stringable
     */
    public getMessage();
abstract public int getCode();
abstract public string getFile();
abstract public int getLine();
abstract public array getTrace();
abstract public string getTraceAsString();
abstract public getPrevious();
abstract public string __toString();
}
