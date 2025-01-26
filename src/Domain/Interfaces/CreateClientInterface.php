<?php

namespace Interfaces;

use Orders\Domain\Entities\Client;

interface CreateClientInterface
{
    public function execute(string $clientExternalId): Client;
}