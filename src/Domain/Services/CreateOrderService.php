<?php

namespace Orders\Domain\Services;

use Orders\Domain\DataTransferObjects\OrderDataDTO;
use Orders\Domain\DataTransferObjects\OrderItemDataDTO;
use Orders\Domain\Entities\Order;
use Orders\Domain\Interfaces\Repositories\ClientRepositoryInterface;
use Orders\Domain\Interfaces\Repositories\OrderItemRepositoryInterface;
use Orders\Domain\Interfaces\Repositories\OrderRepositoryInterface;
use Psr\Log\LoggerInterface;

readonly class CreateOrderService
{
    public function __construct(
        private ClientRepositoryInterface $clientRepository,
        private OrderRepositoryInterface $orderRepository,
        private OrderItemRepositoryInterface $orderItemRepository,
        private LoggerInterface $logger
    ) {
    }

    public function execute(OrderDataDTO $orderDataDTO): Order
    {
        $client = $this->clientRepository->find($orderDataDTO->clientExternalId);

        if ($client === null) {
            $client = $this->clientRepository->create($orderDataDTO->clientExternalId);
        }

        $order = $this->orderRepository->create($client, $orderDataDTO);

        $this->logger->info('order_created', ['order_id' => $order->id, 'client_id' => $order->client_id]);

        /**
         * @var OrderItemDataDTO $orderItemDataDTO
         */
        foreach ($orderDataDTO->orderItemData as $orderItemDataDTO) {
            $orderItem = $this->orderItemRepository->create($order, $orderItemDataDTO);
            $this->logger->info('order_item_created', [
                'order_id' => $order->id,
                'order_item_id' => $orderItem->id,
                'sku' => $orderItem->name,
            ]);
        }

        return $order;
    }
}