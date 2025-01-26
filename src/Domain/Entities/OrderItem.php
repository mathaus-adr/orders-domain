<?php

namespace Orders\Domain\Entities;

final readonly class OrderItem
{
    public int $id;
    public string $name;
    public string $created_at;
    public string $updated_at;
}