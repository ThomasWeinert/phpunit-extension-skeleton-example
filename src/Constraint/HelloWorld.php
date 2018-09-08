<?php
namespace ThomasWeinert\PHPUnitExtensionExample\Constraint;

use PHPUnit\Framework\Constraint\Constraint as PHPUnitConstraint;

class HelloWorld extends PHPUnitConstraint
{
    protected function matches($other): bool
    {
        return (string) $other === 'Hello World!';
    }

    public function toString(): string
    {
        return 'String does not match "Hello World!".';
    }
}
