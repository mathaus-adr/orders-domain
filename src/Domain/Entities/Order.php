<?php

namespace Orders\Domain\Entities;

final class Order extends BaseEntity
{
    public readonly int $id;
    public readonly string $external_order_id;
    public readonly int $client_id;
    public readonly float $total;
    public readonly string $created_at;
    public readonly string $updated_at;
}