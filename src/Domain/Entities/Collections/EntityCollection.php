<?php

namespace Orders\Domain\Entities\Collections;

use Orders\Domain\Entities\Interfaces\AttributesToArrayInterface;
use Orders\Domain\Entities\Interfaces\CollectionInterface;

class EntityCollection implements CollectionInterface
{
    public function __construct(public readonly array $items = [])
    {
    }

    public function itemsToArray(): array
    {
        $elements = [];
        /**
         * @var AttributesToArrayInterface $item
         */
        foreach ($this->items as $item) {
            $elements[] = $item->toArray();
        }
        return $elements;
    }
}