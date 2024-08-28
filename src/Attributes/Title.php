<?php

namespace Intrfce\EnumAttributeDescriptors\Attributes;

use Attribute;

#[Attribute]
class Title
{
    public function __construct(public string $title) {}
}
