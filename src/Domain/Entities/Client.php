<?php

namespace Orders\Domain\Entities;

final class Client extends BaseEntity
{
    public readonly int $id;
    public readonly string $client_external_id;

    public readonly string $created_at;

    public readonly string $updated_at;
}