@php($settings = app(\JeffersonGoncalves\Pirsch\Settings\PirschSettings::class))

@if($settings->isConfigured())
    <script @if(\Illuminate\Support\Facades\Vite::cspNonce()) nonce="{{ \Illuminate\Support\Facades\Vite::cspNonce() }}" @endif defer src="https://api.pirsch.io/pa.js" id="pianjs" data-code="{{ $settings->identification_code }}"></script>
@endif
