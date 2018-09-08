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
        $this->assertThat('Hello World!', $this->equalsHelloWorld());
    }

    public function testAssertMethodCalledWithHelloWorld():void
    {
        $mock = $this
            ->getMockBuilder(\stdClass::class)
            ->setMethods(['greet'])
            ->getMock();
        $mock
            ->expects($this->once())
            ->method('greet')
            ->with($this->equalsHelloWorld());

        $mock->greet('Hello World!');
    }
}
