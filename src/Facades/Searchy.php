<?php

namespace Monogram\Searching\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Searchy facade for the Laravel framework.
 */
class Searching extends Facade
{
    /**
     * Get the registered component.
     *
     * @return object
     */
    protected static function getFacadeAccessor()
    {
        return 'searching';
    }
}
