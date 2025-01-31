<?php

namespace Orders\Domain\Entities\Collections;

use Orders\Domain\Entities\Interfaces\PaginatedCollectionInterface;

class EntityPaginatedCollection extends EntityCollection implements PaginatedCollectionInterface
{

    public int $totalItems;

    public int $totalPages;

    public function __construct(
        public readonly array $items = [],
        public readonly int $itemsPerPage = 10,
        public readonly int $currentPage = 1
    )
    {
        parent::__construct($items);
        $this->totalItems = count($items);
        $this->totalPages = ceil($this->totalItems / $this->itemsPerPage);
    }
    public function getPaginatedItems(): array
    {
        return [
            'data' => $this->itemsToArray(),
            'total' => count($this->items),
            'total_pages' => $this->totalPages,
            'current_page' => $this->currentPage,
            'items_per_page' => $this->itemsPerPage
        ];
    }
}