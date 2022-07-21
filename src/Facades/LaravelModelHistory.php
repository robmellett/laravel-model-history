<?php

namespace RobMellett\LaravelModelHistory\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RobMellett\LaravelModelHistory\LaravelModelHistory
 */
class LaravelModelHistory extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-model-history';
    }
}
