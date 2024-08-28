<?php

namespace Intrfce\EnumAttributeDescriptors\Tests\Enums;

use Intrfce\EnumAttributeDescriptors\Attributes\Description;
use Intrfce\EnumAttributeDescriptors\Attributes\Title;
use Intrfce\EnumAttributeDescriptors\Concerns\UsesAttributeBasedDescriptors;

enum Colours: string
{
    use UsesAttributeBasedDescriptors;

    #[Title('Red')]
    #[Description('This colour is red')]
    case Red = 'red';

    #[Title('Blue')]
    #[Description('This colour is blue')]
    case Blue = 'blue';
}
