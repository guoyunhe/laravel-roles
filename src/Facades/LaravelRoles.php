<?php

namespace GuoYunhe\LaravelRoles\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GuoYunhe\LaravelRoles\LaravelRoles
 */
class LaravelRoles extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \GuoYunhe\LaravelRoles\LaravelRoles::class;
    }
}
