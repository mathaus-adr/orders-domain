<?php

namespace Orders\Domain\Interfaces\Repositories;

use Orders\Domain\DataTransferObjects\OrderItemDataDTO;
use Orders\Domain\Entities\Order;
use Orders\Domain\Entities\OrderItem;

interface OrderItemRepositoryInterface
{
    public function create(Order $order, OrderItemDataDTO $orderItemDataDTO): OrderItem;
}