<?php

namespace Orders\Domain\Entities;

use Orders\Domain\Traits\FillObjectData;

final readonly class Client
{
    use FillObjectData;

    public int $id;
    public string $external_client_id;
    public int $order_quantity;
    public string $created_at;
    public string $updated_at;

    public function __construct(
        array $attributes
    ) {
        $this->fill($attributes);
    }

//
}