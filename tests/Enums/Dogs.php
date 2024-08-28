<?php

namespace Intrfce\EnumAttributeDescriptors\Tests\Enums;

use Intrfce\EnumAttributeDescriptors\Attributes\Description;
use Intrfce\EnumAttributeDescriptors\Attributes\Title;
use Intrfce\EnumAttributeDescriptors\Concerns\HasAttributeDescriptors;

enum Dogs: string
{
    use HasAttributeDescriptors;

    case Labrador = 'labrador';

    public function titleFallback(): ?string
    {
        return strtoupper($this->name);
    }

    public function descriptionFallback(): ?string
    {
        return 'one two three';
    }
}
