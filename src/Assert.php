<?php

namespace ThomasWeinert\PHPUnitExtensionExample;

trait Assert
{
    public static function assertHelloWorld(string $actual): void
    {
        self::assertEquals('Hello World!', $actual);
    }
}
