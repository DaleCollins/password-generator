<?php

namespace DaleCollins\PasswordGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DaleCollins\PasswordGenerator\PasswordGenerator
 */
class PasswordGenerator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'password-generator';
    }
}
