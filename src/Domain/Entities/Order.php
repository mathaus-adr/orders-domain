<?php

namespace Orders\Domain\Entities;

final readonly class Order
{
    public int $id;
    public string $external_order_id;
    public int $client_id;
    public float $total;
    public string $created_at;
    public string $updated_at;
}