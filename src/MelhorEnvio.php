<?php

namespace MelhorEnvio;

use MelhorEnvio\Request\Client;
use MelhorEnvio\Services\CarrierService;
use MelhorEnvio\Services\ShipmentService;

class MelhorEnvio {

    /**
     * @var Client
     */
    protected $client;

    public function __construct($token)
    {
        $this->client = new Client($token);
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    public function shipments(): ShipmentService
    {
        return new ShipmentService($this->client);
    }

    public function carriers(): CarrierService
    {
        return new CarrierService($this->client);
    }
}