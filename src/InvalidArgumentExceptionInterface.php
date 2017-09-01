<?php

namespace Dhii\Exception;

/**
 * Represents an exception that signals an invalid function argument.
 *
 * @since 0.1
 */
interface InvalidArgumentExceptionInterface extends ThrowableInterface
{
    /**
     * Retrieves the problematic argument.
     *
     * @since 0.1
     *
     * @return mixed The argument value.
     */
    public function getArgument();
}
