<?php

namespace ThomasWeinert\PHPUnitExtensionExample;

trait Assert
{
    public static function assertHelloWorld(string $actual, string $message = ''): void
    {
        static::assertThat($actual, new Constraint\HelloWorld(), $message);
    }
}
