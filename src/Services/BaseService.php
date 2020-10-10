<?php

namespace MelhorEnvio\Services;

use MelhorEnvio\Request\Client;

class BaseService
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}