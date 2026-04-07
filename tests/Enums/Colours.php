<?php

namespace Intrfce\EnumAttributeDescriptors\Tests\Enums;

use Intrfce\EnumAttributeDescriptors\Attributes\Description;
use Intrfce\EnumAttributeDescriptors\Attributes\KeyValue;
use Intrfce\EnumAttributeDescriptors\Attributes\Title;
use Intrfce\EnumAttributeDescriptors\Concerns\HasAttributeDescriptors;

enum Colours: string
{
    use HasAttributeDescriptors;

    #[Title('Red')]
    #[Description('This colour is red')]
    #[KeyValue('hex', '#FF0000')]
    #[KeyValue('sort_order', 1)]
    case Red = 'red';

    #[Title('Blue')]
    #[Description('This colour is blue')]
    #[KeyValue('hex', '#0000FF')]
    #[KeyValue('sort_order', 2)]
    #[KeyValue('is_primary', true)]
    case Blue = 'blue';

    case Green = 'green';
}
