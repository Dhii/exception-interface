<?php

namespace Dhii\Exception\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Exception\BadSubjectExceptionInterface}.
 *
 * @since 0.2
 */
class BadSubjectExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.2
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Exception\BadSubjectExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.2
     *
     * @return \Dhii\Exception\BadSubjectExceptionInterface
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

                ->getSubject()
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
        $this->assertInstanceOf('Dhii\Exception\ThrowableInterface', $subject, 'Subject does not extend required interface');
    }
}
