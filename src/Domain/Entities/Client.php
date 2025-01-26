<?php

namespace Orders\Domain\Entities;

use Orders\Domain\Traits\FillObjectData;

final readonly class Client
{
    use FillObjectData;
    public function __construct(
        array $attributes
    ) {
        $this->fill($attributes);
    }

//
}