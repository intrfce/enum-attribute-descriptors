<?php

namespace Intrfce\EnumAttributeDescriptors\Concerns;

use Intrfce\EnumAttributeDescriptors\Attributes\Description;
use Intrfce\EnumAttributeDescriptors\Attributes\KeyValue;
use Intrfce\EnumAttributeDescriptors\Attributes\MetaData;
use Intrfce\EnumAttributeDescriptors\Attributes\Title;
use ReflectionClassConstant;

trait HasAttributeDescriptors
{
    public function getTitle(): ?string
    {
        $reflectionClass = new ReflectionClassConstant($this, $this->name);
        $attributes = $reflectionClass->getAttributes(Title::class);

        return isset($attributes[0]) ? $attributes[0]?->newInstance()?->title : $this->titleFallback();
    }

    public function getDescription(): ?string
    {
        $reflectionClass = new ReflectionClassConstant($this, $this->name);
        $attributes = $reflectionClass->getAttributes(Description::class);

        return isset($attributes[0]) ? $attributes[0]?->newInstance()?->description : $this->descriptionFallback();
    }

    /**
     * Returns and MetaData you have set against the enum case.
     * The MetaData class accepts an array of data.
     */
    public function getMetaData(): mixed
    {
        $reflectionClass = new ReflectionClassConstant($this, $this->name);
        $attributes = $reflectionClass->getAttributes(MetaData::class);

        return isset($attributes[0]) ? $attributes[0]->newInstance()?->description : null;
    }

    /**
     * Returns the value for a given key from KeyValue attributes on the enum case,
     * or null if the key is not found.
     */
    public function getKeyValue(string $key): mixed
    {
        $reflectionClass = new ReflectionClassConstant($this, $this->name);
        $attributes = $reflectionClass->getAttributes(KeyValue::class);

        foreach ($attributes as $attribute) {
            $instance = $attribute->newInstance();
            if ($instance->key === $key) {
                return $instance->value;
            }
        }

        return null;
    }

    /**
     * Override this in your class to edit the fallback.
     */
    public function titleFallback(): ?string
    {
        return null;
    }

    /**
     * Override this in your class to edit the fallback.
     */
    public function descriptionFallback(): ?string
    {
        return null;
    }
}
