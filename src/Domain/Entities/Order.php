<?php

namespace Orders\Domain\Entities;

use Orders\Domain\Entities\Traits\FillEntityData;

final readonly class Order
{
    use FillEntityData;

    public int $id;
    public string $external_order_id;
    public int $client_id;
    public float $total;
    public string $created_at;
    public string $updated_at;
}