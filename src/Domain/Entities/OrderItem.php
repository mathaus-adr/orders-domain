<?php

namespace Orders\Domain\Entities;

final class OrderItem extends BaseEntity
{
    public readonly int $id;
    public readonly string $name;
    public readonly string $created_at;
    public readonly string $updated_at;
}