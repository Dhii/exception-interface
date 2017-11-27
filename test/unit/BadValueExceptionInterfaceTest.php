<?php

namespace Dhii\Exception\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Exception\BadValueExceptionInterface}.
 *
 * @since [*next-version*]
 */
class BadValueExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Exception\BadValueExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Exception\BadValueExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->getMessage()
                ->getCode()
                ->getFile()
                ->getLine()
                ->getTrace()
                ->getTraceAsString()
                ->getPrevious()
                ->__toString()

                ->getValue()
                ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the subject could not be created');
        $this->assertInstanceOf('Dhii\Exception\ThrowableInterface', $subject, 'Subject does not extend required interface');
    }
}
