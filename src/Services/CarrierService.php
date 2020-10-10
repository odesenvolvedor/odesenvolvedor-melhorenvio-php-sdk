<?php

namespace MelhorEnvio\Services;

class CarrierService extends BaseService
{

    public function allCompanies()
    {
        return $this->client->get('me/shipment/companies');
    }

    public function findCompany($id)
    {
        return $this->client->get("me/shipment/companies/{$id}");
    }

    public function allServices()
    {
        return $this->client->get('me/shipment/services');
    }

    public function findService($id)
    {
        return $this->client->get("me/shipment/services/{$id}");
    }

    public function allAgencies($filters = [])
    {
        return $this->client->get('me/shipment/agencies', [
            'query' => $filters
        ]);
    }

    public function findAgency($id)
    {
        return $this->client->get("me/shipment/agencies/{$id}");
    }

}