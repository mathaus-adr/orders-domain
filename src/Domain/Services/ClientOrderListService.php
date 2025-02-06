<?php

namespace Orders\Domain\Services;

use Orders\Domain\Entities\Collections\EntityPaginatedCollection;
use Orders\Domain\Entities\Order;
use Orders\Domain\Interfaces\Repositories\OrderRepositoryInterface;

readonly class ClientOrderListService
{
    public function __construct(
        private OrderRepositoryInterface $orderRepository
    ) {
    }

    public function execute(
        string $externalClientId
    ) {
        return $this->orderRepository->getOrderListPaginatedByExternalClientId(
            externalClientId: $externalClientId
        );
    }
}