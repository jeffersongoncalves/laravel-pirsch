<?php

namespace JeffersonGoncalves\Pirsch\Settings;

use Spatie\LaravelSettings\Settings;

class PirschSettings extends Settings
{
    /** Pirsch identification code. Empty = no script. */
    public ?string $identification_code;

    public static function group(): string
    {
        return 'pirsch';
    }

    /** Whether the settings are complete enough to render the script. */
    public function isConfigured(): bool
    {
        return preg_match('/^[a-z0-9]+$/i', (string) $this->identification_code) === 1;
    }
}
