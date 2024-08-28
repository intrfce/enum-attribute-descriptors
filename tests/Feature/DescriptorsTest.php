<?php

use Intrfce\EnumAttributeDescriptors\Tests\Enums\Colours;

it('Gets the title of a given enum case', function () {
    $case = Colours::Blue;
    expect($case->getTitle())->toBe('Blue');
});

it('Gets the description of a given enum case', function () {
    $case = Colours::Blue;
    expect($case->getDescription())->toBe('This colour is blue');
});

it('Returns null for the title if one not set', function () {
    $case = Colours::Green;
    expect($case->getTitle())->toBeNull();
});

it('Returns null for the description if one not set', function () {
    $case = Colours::Green;
    expect($case->getDescription())->toBeNull();
});
