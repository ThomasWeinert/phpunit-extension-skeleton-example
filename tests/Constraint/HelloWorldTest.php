<?php

namespace ThomasWeinert\PHPUnitExtensionExample\Constraint;

use PHPUnit\Framework\TestCase;

/**
 * @covers \ThomasWeinert\PHPUnitExtensionExample\Constraint\HelloWorld
 */
class HelloWorldTest extends TestCase
{
    public function testEvaluateExpectingTrue(): void
    {
        $constraint = new HelloWorld();
        self::assertTrue($constraint->evaluate('Hello World!', '', true));
    }

    public function testEvaluateExpectingFalse(): void
    {
        $constraint = new HelloWorld();
        self::assertFalse($constraint->evaluate('Hello Universe!', '', true));
    }
}
