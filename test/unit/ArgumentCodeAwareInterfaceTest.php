<?php

namespace Dhii\Exception\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Exception\ArgumentCodeAwareInterface}.
 *
 * @since [*next-version*]
 */
class ArgumentCodeAwareInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Exception\ArgumentCodeAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Exception\ArgumentCodeAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->getArgumentCode()
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
    }
}
