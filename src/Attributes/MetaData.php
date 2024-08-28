<?php

namespace Intrfce\EnumAttributeDescriptors\Attributes;

use Attribute;

#[Attribute]
class MetaData
{
    public function __construct(public string $description) {}
}
