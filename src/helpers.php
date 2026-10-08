<?php

use JeffersonGoncalves\Pirsch\Settings\PirschSettings;

if (! function_exists('pirsch_settings')) {
    function pirsch_settings(): PirschSettings
    {
        return app(PirschSettings::class);
    }
}
