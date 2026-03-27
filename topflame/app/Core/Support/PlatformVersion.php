<?php

namespace App\Core\Support;

class PlatformVersion
{
    public const CURRENT = '1.0.0-foundation';

    public static function current(): string
    {
        return self::CURRENT;
    }
}
