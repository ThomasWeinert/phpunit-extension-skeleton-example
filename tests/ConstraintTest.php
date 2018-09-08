<?php

namespace ThomasWeinert\PHPUnitExtensionExample;

use PHPUnit\Framework\TestCase;

/**
 * @covers \ThomasWeinert\PHPUnitExtensionExample\Constraint
 *
 * @uses \ThomasWeinert\PHPUnitExtensionExample\Constraint\HelloWorld
 */
class ConstraintTest extends TestCase
{
    use Constraint;

    public function testAssertHelloWorldExpectingSuccess(): void
    {
        self::assertThat('Hello World!', self::equalsHelloWorld());
    }
}
