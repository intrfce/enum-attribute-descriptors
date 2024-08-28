<?php

namespace Intrfce\EnumAttributeDescriptors\Concerns;

use Intrfce\EnumAttributeDescriptors\Attributes\Description;
use Intrfce\EnumAttributeDescriptors\Attributes\Title;
use ReflectionClassConstant;

trait HasAttributeDescriptors
{
    public function getTitle(): ?string
    {
        $reflectionClass = new ReflectionClassConstant($this, $this->name);
        $attribute = collect($reflectionClass->getAttributes(Title::class));

        return $attribute->first()?->newInstance()?->title;
    }

    public function getDescription(): ?string
    {
        $reflectionClass = new ReflectionClassConstant($this, $this->name);
        $attribute = collect($reflectionClass->getAttributes(Description::class));

        return $attribute->first()?->newInstance()?->description;
    }
}
