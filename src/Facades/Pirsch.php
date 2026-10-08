<?php

namespace JeffersonGoncalves\Pirsch\Facades;

use Illuminate\Support\Facades\Facade;
use JeffersonGoncalves\Pirsch\Settings\PirschSettings;

/**
 * @property ?string $identification_code
 *
 * @see PirschSettings
 */
class Pirsch extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return PirschSettings::class;
    }
}
