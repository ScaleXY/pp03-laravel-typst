<?php

namespace ScaleXY\LaravelTypst\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ScaleXY\LaravelTypst\LaravelTypst
 */
class LaravelTypst extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ScaleXY\LaravelTypst\LaravelTypst::class;
    }
}
