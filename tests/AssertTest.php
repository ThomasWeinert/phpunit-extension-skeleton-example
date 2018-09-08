<?php

namespace ThomasWeinert\PHPUnitExtensionExample;

use PHPUnit\Framework\TestCase;

/**
 * @covers \ThomasWeinert\PHPUnitExtensionExample\Assert
 *
 * @uses \ThomasWeinert\PHPUnitExtensionExample\Constraint\HelloWorld
 */
class AssertTest extends TestCase
{
    use Assert;

    public function testAssertHelloWorldExpectingSuccess(): void
    {
        self::assertHelloWorld('Hello World!');
    }
}
