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
