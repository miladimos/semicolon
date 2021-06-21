<?php

namespace App\Services;

class GenerateTokenService
{
    public static function generate()
    {
        return random_int(100000, 999999);
    }
}
