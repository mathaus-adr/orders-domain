<?php

namespace Orders\Domain\Entities\Interfaces;

use Orders\Domain\Entities\Interfaces\CollectionInterface;

interface PaginatedCollectionInterface
{
    public function getPaginatedItems(): array;
}