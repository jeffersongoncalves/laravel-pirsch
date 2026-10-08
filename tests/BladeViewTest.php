<?php

it('renders the Pirsch script once configured', function () {
    pirsch(['identification_code' => 'AbCdEf0123456789AbCdEf0123456789']);

    $this->blade('@include("pirsch::script")')
        ->assertSee('api.pirsch.io/pa.js', false)
        ->assertSee('data-code="AbCdEf0123456789AbCdEf0123456789"', false);
});

it('renders nothing while it is not configured', function () {
    pirsch(['identification_code' => null]);

    $this->blade('@include("pirsch::script")')->assertDontSee('api.pirsch.io', false);
});

it('does not render an invalid value into the page', function () {
    pirsch(['identification_code' => '"><script>alert(1)</script>']);

    $this->blade('@include("pirsch::script")')
        ->assertDontSee('api.pirsch.io', false)
        ->assertDontSee('alert(1)', false);
});
