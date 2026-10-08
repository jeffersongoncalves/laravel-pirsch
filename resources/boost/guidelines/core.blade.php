## Laravel Pirsch

### Overview
Renders the Pirsch script in Blade layouts. The settings are stored in the database with `spatie/laravel-settings` (`PirschSettings`, group `pirsch`) — no config file, no `.env`.

### Usage

@verbatim
<code-snippet name="blade-include" lang="blade">
@include('pirsch::script')
</code-snippet>
@endverbatim

@verbatim
<code-snippet name="configure" lang="php">
$settings = pirsch_settings();
$settings->identification_code = 'AbCdEf0123456789AbCdEf0123456789';
$settings->save();
</code-snippet>
@endverbatim

### Conventions
- Namespace: `JeffersonGoncalves\Pirsch`; view namespace `pirsch` (`pirsch::script`)
- The script renders only when `PirschSettings::isConfigured()` is true
- Publish migrations with `php artisan vendor:publish --tag=pirsch-settings-migrations`
