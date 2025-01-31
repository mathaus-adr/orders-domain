<?php

namespace Orders\Domain\Interfaces\Repositories;

use Orders\Domain\DataTransferObjects\OrderDataDTO;
use Orders\Domain\Entities\Client;
use Orders\Domain\Entities\Collections\EntityPaginatedCollection;
use Orders\Domain\Entities\Order;

interface OrderRepositoryInterface
{
    public function create(Client $client, OrderDataDTO $orderDataDTO): Order;

    public function getOrderListPaginatedByExternalClientId(string $externalClientId, int $itemsPerPage = 10, int $currentPage = 1): EntityPaginatedCollection;
}