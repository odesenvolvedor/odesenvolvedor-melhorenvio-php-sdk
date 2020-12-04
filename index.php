<?php 

require_once 'vendor/autoload.php';

$melhorEnvio = new \MelhorEnvio\MelhorEnvio('YOUR_TOKEN');

$shipment = new \MelhorEnvio\Entities\Shipment();

$shipment->getFrom()->setPostalCode('75066227');
$shipment->getTo()->setPostalCode('02125000');
$shipment->getOptions()->setInsuranceValue(20.50);
$shipment->getPackage()
         ->setWeight(1)
         ->setWidth(12)
         ->setHeight(4)
         ->setLength(17);
$shipment->setServices("1,2");

try {
    print_r($melhorEnvio->shipments()->calculate($shipment));
} catch (\GuzzleHttp\Exception\ClientException $ex) {
    print_r($ex->getMessage());
}