<?php

namespace Dhii\Exception;

use Exception as RootException;
use Dhii\Util\String\StringableInterface;

/**
 * Formalizes the interface of exceptions and errors.
 * 
 * Primarily, this is necessary to formally depend on exception methods before
 * PHP 7.0, which introduces the {@link http://php.net/manual/en/class.throwable.php Throwable}
 * interface.
 *
 * @since [*next-version*]
 */
interface ThrowableInterface extends StringableInterface
{
    /**
     * Retrieves the message.
     *
     * @since [*next-version*]
     *
     * @return string The message.
     */
    public function getMessage();

    /**
     * Retrieves the code.
     *
     * @since [*next-version*]
     *
     * @return int The code.
     */
    public function getCode();

    /**
     * Retrieves the path to the file where this instance was created.
     *
     * @since [*next-version*]
     *
     * @return string Path to the file.
     */
    public function getFile();

    /**
     * Retrieves the number of the line where the exception was created.
     *
     * @since [*next-version*]
     *
     * @return int The line number.
     */
    public function getLine();

    /**
     * Retrieves the backtrace data.
     *
     * @since [*next-version*]
     *
     * @return array[] Frames of the backtrace, in the same format as
     *                 returned by {@see debug_backtrace()}.
     */
    public function getTrace();

    /**
     * Retrieves the trace in human-readable string format.
     *
     * @since [*next-version*]
     *
     * @return string The string representation of backtrace steps.
     */
    public function getTraceAsString();

    /**
     * Retrieves the previous, inner exception for chaining.
     *
     * @since [*next-version*]
     *
     * @return RootException|null The inner exception, if any.
     */
    public function getPrevious();

    /**
     * Retrieves the human-readable representation of the error.
     *
     * @since [*next-version*]
     */
    public function __toString();
}
