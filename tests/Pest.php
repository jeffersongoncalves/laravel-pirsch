<?php

use JeffersonGoncalves\Pirsch\Settings\PirschSettings;
use JeffersonGoncalves\Pirsch\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

/**
 * Saves the given values on top of the stored Pirsch settings.
 *
 * @param  array<string, mixed>  $values
 */
function pirsch(array $values): PirschSettings
{
    $settings = app(PirschSettings::class);
    foreach ($values as $name => $value) {
        $settings->{$name} = $value;
    }
    $settings->save();

    return $settings;
}
