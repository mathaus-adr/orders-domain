<?php

namespace Orders\Domain\Entities;

use Orders\Domain\Entities\Traits\FillEntityData;

final readonly class OrderItem
{
    use FillEntityData;

    public int $id;
    public string $name;
    public string $created_at;
    public string $updated_at;
}