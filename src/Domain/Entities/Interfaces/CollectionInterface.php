<?php

namespace Orders\Domain\Entities\Interfaces;

interface CollectionInterface
{
    public function itemsToArray(): array;
}