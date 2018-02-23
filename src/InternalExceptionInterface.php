<?php

namespace Dhii\Exception;

use Dhii\Exception\UnitTest\InternalExceptionInterfaceTest;
use Exception as RootException;

/**
 * Represents an exception that is not caused by consumer actions.
 *
 * If this exception is thrown, it means that the cause of the problem
 * is not relates to any parameter passed to the unit that was invoked.
 *
 * Exceptions of this type guarantee an inner exceptions, so that consumers
 * can have a way of determining the cause of the problem.
 *
 * @since [*next-version*]
 */
interface InternalExceptionInterface extends ThrowableInterface
{
    /**
     * @since [*next-version*]
     *
     * @return RootException
     */
    public function getPrevious();
}
