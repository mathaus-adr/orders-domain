<?php

namespace Orders\Domain\Entities;

abstract class BaseEntity
{
    public function __construct(array $attributes) {
        $this->fill($attributes);
    }

    private function fill(array $attributes): void
    {
        $filteredAttributes = array_filter($attributes, function ($key) {
            return property_exists($this, $key);
        }, ARRAY_FILTER_USE_KEY);

        foreach ($filteredAttributes as $key => $value) {
            $this->{$key} = $value;
        }
    }
}