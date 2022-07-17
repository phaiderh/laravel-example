<?php

namespace Haidarh\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Haidarh\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-example';
    }
}
