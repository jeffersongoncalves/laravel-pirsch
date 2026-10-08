<?php

use JeffersonGoncalves\Pirsch\Facades\Pirsch;
use JeffersonGoncalves\Pirsch\Settings\PirschSettings;

it('can resolve PirschSettings from the container', function () {
    expect(app(PirschSettings::class))->toBeInstanceOf(PirschSettings::class);
});

it('is not configured by default', function () {
    expect(app(PirschSettings::class)->isConfigured())->toBeFalse();
});

it('can update and persist settings', function () {
    pirsch(['identification_code' => 'AbCdEf0123456789AbCdEf0123456789']);

    expect(app(PirschSettings::class)->isConfigured())->toBeTrue()
        ->and(app(PirschSettings::class)->identification_code)->toBe('AbCdEf0123456789AbCdEf0123456789');
});

it('belongs to the pirsch group', function () {
    expect(PirschSettings::group())->toBe('pirsch');
});

it('can be accessed via the helper function', function () {
    expect(pirsch_settings())->toBeInstanceOf(PirschSettings::class);
});

it('reads a persisted value through the Facade', function () {
    pirsch(['identification_code' => 'AbCdEf0123456789AbCdEf0123456789']);

    expect(Pirsch::getFacadeRoot()->identification_code)->toBe('AbCdEf0123456789AbCdEf0123456789');
});
