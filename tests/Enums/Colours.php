<?php

namespace Intrfce\EnumAttributeDescriptors\Tests\Enums;

use Intrfce\EnumAttributeDescriptors\Attributes\Description;
use Intrfce\EnumAttributeDescriptors\Attributes\Title;
use Intrfce\EnumAttributeDescriptors\Concerns\HasAttributeDescriptors;

enum Colours: string
{
    use HasAttributeDescriptors;

    #[Title('Red')]
    #[Description('This colour is red')]
    case Red = 'red';

    #[Title('Blue')]
    #[Description('This colour is blue')]
    case Blue = 'blue';

    case Green = 'green';
}
