<?php

namespace Orders\Domain\Services;

use Orders\Domain\Interfaces\Repositories\OrderRepositoryInterface;

readonly class ListOrdersService
{
    public function __construct(
        private OrderRepositoryInterface $orderRepository
    ) {}

    public function execute(?string $externalClientId = null, ?string $externalOrderId = null)
    {
        return $this->orderRepository->getOrderListByParam(
            externalOrderId: $externalOrderId,
            externalClientId: $externalClientId,
        );
    }
}