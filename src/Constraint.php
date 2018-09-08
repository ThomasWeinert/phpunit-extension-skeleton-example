<?php

namespace ThomasWeinert\PHPUnitExtensionExample;

trait Constraint
{
    public static function equalsHelloWorld(): Constraint\HelloWorld
    {
        return new Constraint\HelloWorld();
    }
}
