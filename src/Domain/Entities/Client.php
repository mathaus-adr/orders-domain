<?php

namespace Orders\Domain\Entities;

use Orders\Domain\Entities\Traits\FillEntityData;
final readonly class Client
{
    use FillEntityData;

    public int $id;
    public string $external_client_id;
    public int $order_quantity;
    public string $created_at;
    public string $updated_at;
}