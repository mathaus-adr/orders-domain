<?php

namespace Orders\Domain\Entities\Interfaces;

interface AttributesToArrayInterface
{
    public function toArray(): array;
}