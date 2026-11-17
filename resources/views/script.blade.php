@php
    $cookieConsent = function_exists('cookie_consent_script_attributes') ? cookie_consent_script_attributes('pirsch') : '';
@endphp
@php($settings = app(\JeffersonGoncalves\Pirsch\Settings\PirschSettings::class))

@if($settings->isConfigured())
    <script{!! $cookieConsent !!} @if(\Illuminate\Support\Facades\Vite::cspNonce()) nonce="{{ \Illuminate\Support\Facades\Vite::cspNonce() }}" @endif defer src="https://api.pirsch.io/pa.js" id="pianjs" data-code="{{ $settings->identification_code }}"></script>
@endif
