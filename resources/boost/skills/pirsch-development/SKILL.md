---
name: pirsch-development
description: Add Pirsch to a Laravel app with jeffersongoncalves/laravel-pirsch — Blade include, settings stored in the database via spatie/laravel-settings.
---

# Laravel Pirsch Development

## When to use this skill

- Adding Pirsch to a Laravel / Blade app
- Changing the Pirsch settings at runtime (admin panel, seeder, tinker)
- Debugging why the Pirsch script doesn't show up

## Setup

```bash
composer require jeffersongoncalves/laravel-pirsch
php artisan vendor:publish --tag=pirsch-settings-migrations
php artisan migrate
```

```blade
@include('pirsch::script')
```

```php
$settings = pirsch_settings();
$settings->identification_code = 'AbCdEf0123456789AbCdEf0123456789';
$settings->save();
```

## Settings

| Setting | Type | Default |
|---------|------|---------|
| `identification_code` | `?string` | `null` |

## Troubleshooting

- **No script in the HTML**: the settings are incomplete or invalid — check `pirsch_settings()->isConfigured()`.
- **Settings not found**: run the settings migration (`php artisan migrate` after publishing).
- **Filament panel**: use `jeffersongoncalves/filament-pirsch`, which injects the same view into panels and adds a settings page.
