<?php

namespace Dhii\Exception;

/**
 * Represents an exception that signals an invalid function argument.
 *
 * @since [*next-version*]
 */
interface InvalidArgumentExceptionInterface extends ThrowableInterface
{
    /**
     * Retrieves the problematic argument.
     *
     * @since [*next-version*]
     *
     * @return mixed The argument value.
     */
    public function getArgument();
}
