<?php

namespace Orders\Domain\DataTransferObjects;

readonly class OrderItemDataDTO
{
    public string $sku;

    public float $quantity;

    public float $price;


    /**
     * @param  array  $orderItemData {
     *   produto: string,
     *   quantidade: float,
     *   preco: float
     * } $orderItemData
     */
    public function __construct(array $orderItemData)
    {
        $this->sku = $orderItemData['produto'];
        $this->quantity = $orderItemData['quantidade'];
        $this->price = $orderItemData['preco'];
    }
}