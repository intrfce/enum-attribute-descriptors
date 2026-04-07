<?php

namespace Intrfce\EnumAttributeDescriptors\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS_CONSTANT | Attribute::IS_REPEATABLE)]
class KeyValue
{
    public function __construct(public string $key, public mixed $value) {}
}
