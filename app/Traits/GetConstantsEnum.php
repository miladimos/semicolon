<?php

namespace App\Traits;

use ReflectionClass;

trait GetConstantsEnum
{
    public static function getConstants()
    {
        $reflectionClass = new ReflectionClass(static::class); // __CLASS__
        return $reflectionClass->getConstants();
    }
}
