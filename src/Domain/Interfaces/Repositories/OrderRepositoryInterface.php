<?php

namespace Orders\Domain\Interfaces\Repositories;

use Orders\Domain\DataTransferObjects\OrderDataDTO;
use Orders\Domain\Entities\Client;
use Orders\Domain\Entities\Order;

interface OrderRepositoryInterface
{
    public function create(Client $client, OrderDataDTO $orderDataDTO): Order;

    public function getOrderListPaginatedByExternalClientId(string $externalClientId);
}