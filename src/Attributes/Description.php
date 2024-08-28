<?php

namespace Intrfce\EnumAttributeDescriptors\Attributes;

use Attribute;

#[Attribute]
class Description
{
    public function __construct(public string $description) {}
}
