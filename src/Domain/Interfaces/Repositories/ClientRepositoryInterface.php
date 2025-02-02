<?php

namespace Orders\Domain\Interfaces\Repositories;

use Orders\Domain\Entities\Client;

interface ClientRepositoryInterface
{
    public function find(string $clientExternalId): ?Client;

    public function create(string $clientExternalId): Client;

    public function updateClientTotalOrders(Client $client): void;
}