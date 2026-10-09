<?php

use Illuminate\Support\Facades\Vite;

it('stamps the CSP nonce on every script tag', function () {
    Vite::useCspNonce('test-nonce');
    pirsch(['identification_code' => 'AbCdEf0123456789AbCdEf0123456789']);
    $html = (string) $this->blade('@include("pirsch::script")');

    preg_match_all('/<script\b[^>]*>/', $html, $tags);

    expect($tags[0])->not->toBeEmpty()->each->toContain('nonce="test-nonce"');
});

it('renders no nonce attribute when the app uses none', function () {
    pirsch(['identification_code' => 'AbCdEf0123456789AbCdEf0123456789']);
    $html = (string) $this->blade('@include("pirsch::script")');

    expect($html)->toContain('<script')->not->toContain('nonce=');
});
