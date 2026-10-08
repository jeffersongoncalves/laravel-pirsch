# Changelog

All notable changes to `laravel-pirsch` will be documented in this file.

## 1.0.0 - 2026-10-08

First release.

- `@include('pirsch::script')` renders the Pirsch script once the settings are complete
- `PirschSettings` stored with spatie/laravel-settings, validated before rendering
- `Pirsch` facade and `pirsch_settings()` helper

Requires PHP 8.2+ and Laravel 12.61+ or 13.
