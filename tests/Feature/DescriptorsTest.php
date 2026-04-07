<?php

use Intrfce\EnumAttributeDescriptors\Tests\Enums\Colours;
use Intrfce\EnumAttributeDescriptors\Tests\Enums\Dogs;

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

it('Returns a defined title fallback if given', function () {
    $case = Dogs::Labrador;
    expect($case->getTitle())->toBe(strtoupper($case->name));
});

it('Returns a defined description fallback if given', function () {
    $case = Dogs::Labrador;
    expect($case->getDescription())->toBe('one two three');
});

it('Gets a key value from a given enum case', function () {
    expect(Colours::Red->getKeyValue('hex'))->toBe('#FF0000');
});

it('Returns null for a key value that is not set', function () {
    expect(Colours::Green->getKeyValue('hex'))->toBeNull();
});

it('Returns null for a key that does not exist on a case', function () {
    expect(Colours::Red->getKeyValue('nonexistent'))->toBeNull();
});

it('Supports non-string values in key value attributes', function () {
    expect(Colours::Blue->getKeyValue('sort_order'))->toBe(2);
    expect(Colours::Blue->getKeyValue('is_primary'))->toBeTrue();
});

it('Returns the correct value when multiple key values exist', function () {
    expect(Colours::Blue->getKeyValue('hex'))->toBe('#0000FF');
    expect(Colours::Blue->getKeyValue('sort_order'))->toBe(2);
});
