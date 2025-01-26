<?php

namespace Orders\Domain\DataTransferObjects;


readonly class OrderDataDTO
{
    public string $clientExternalId;

    public string $orderExternalId;

    /**
     * @var array OrderItemDataDTO[]
     */
    public array $orderItemData;


    /**
     * @param  array  $orderData  {
     *   codigoCliente: string,
     *   codigoPedido: string,
     *   itens: array
     * }  $orderData
     */
    public function __construct(array $orderData)
    {
        $this->clientExternalId = $orderData['codigoCliente'];
        $this->orderExternalId = $orderData['codigoPedido'];

        foreach ($orderData['itens'] as $orderItemData) {
            $this->orderItemData[] = new OrderItemDataDTO($orderItemData);
        }
    }

    public function getOrderTotal(): float
    {
        $total = 0;
        foreach ($this->orderItemData as $orderItemData) {
            $total += $orderItemData->price;
        }
        return $total;
    }
}