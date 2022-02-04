<?php

namespace Codecycler\Changelog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codecycler\Changelog\Changelog
 */
class Changelog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-changelog';
    }
}
