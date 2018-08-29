<?php

namespace Dhii\Exception\UnitTest;

use Xpmock\TestCase;
use Dhii\Exception\InternalExceptionInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.2
 */
class InternalExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.2
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Exception\InternalExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.2
     *
     * @return TestSubject
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

                ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.2
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the subject could not be created');
        $this->assertInstanceOf('Dhii\Exception\ThrowableInterface', $subject, 'Subject does not implement required interface');
    }
}
