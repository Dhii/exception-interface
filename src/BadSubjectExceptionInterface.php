<?php

namespace Dhii\Exception;

/**
 * An exception that occurs in relation to a wrong, invalid, or erroneous value.
 *
 * @since [*next-version*]
 */
interface BadSubjectExceptionInterface extends ThrowableInterface
{
    /**
     * Retrieves the problematic subject.
     *
     * @since [*next-version*]
     *
     * @return mixed|null The subject, if any.
     */
    public function getSubject();
}
