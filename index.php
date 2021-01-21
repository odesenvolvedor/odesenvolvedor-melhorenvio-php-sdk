<?php 

require_once 'vendor/autoload.php';

$token = "YOUR_TOKEN";
$melhorEnvio = new \MelhorEnvio\MelhorEnvio($token);



/* tracking example */
print_r($melhorEnvio->shipments()->tracking(['orders' => ['c7ae3b4d-81ab-4960-881d-5797d284e095']]));


/* shipment calculate example */
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
} catch (\GuzzleHttp\Exception\RequestException $e) {
    if ($e->hasResponse()) {
        $response = $e->getResponse();
        var_dump($response->getStatusCode()); // HTTP status code;
        var_dump($response->getReasonPhrase()); // Response message;
        var_dump((string) $response->getBody()); // Body, normally it is JSON;
        var_dump(json_decode((string) $response->getBody())); // Body as the decoded JSON;
        var_dump($response->getHeaders()); // Headers array;
        var_dump($response->hasHeader('Content-Type')); // Is the header presented?
        var_dump($response->getHeader('Content-Type')[0]); // Concrete header value;
    }
}

/* end shipment calculate example */




/* insertion of labels in the cart example */
$cart = new \MelhorEnvio\Entities\Cart();

$cart->setService(1)
    ->setAgency(1)
    //->setCoupon('MEUCUPON')
    ->getFrom()
        ->setName('Nome do remetente')
        ->setPhone('62992056586')
        ->setEmail('contato@odesenvolvedor.net')
        ->setDocument('16571478358')
        ->setCompanyDocument('89794131000100')
        ->setStateRegister('123456')
        ->setAddress('Endereco do remetente')
        ->setComplement('Complemento')
        ->setNumber('1')
        ->setDistrict('Bairro')
        ->setCity('Anápolis')
        ->setStateAbbr('GO')
        ->setCountryId('BR')
        ->setPostalCode('75066227')
        ->setNote('Observação');

$cart->getTo()
        ->setName('Nome do remetente')
        ->setPhone('62992056586')
        ->setEmail('contato@odesenvolvedor.net')
        ->setDocument('16571478358')
        ->setCompanyDocument('89794131000100')
        ->setStateRegister('123456')
        ->setAddress('Endereco do remetente')
        ->setComplement('Complemento')
        ->setNumber('1')
        ->setDistrict('Bairro')
        ->setCity('São Paulo')
        ->setStateAbbr('SP')
        ->setCountryId('BR')
        ->setPostalCode('02125000')
        ->setNote('Observação');

$cart->getOptions()
        ->setInsuranceValue(20.50)
        ->setReceipt(false)
        ->setOwnHand(false)
        ->setCollect(false)
        ->setReverse(false)
        ->setNonCommercial(false)
        ->setReminder("lembrete")
        ->getInvoice()
            ->setNumber('12345');
            //->setKey('nf-e');

$cart->getPackage()
         ->setWeight(1)
         ->setWidth(12)
         ->setHeight(4)
         ->setLength(17);
$cart->setProducts(
    [
        newProduct()
            ->setName('Papel adesivo para etiquetas')
            ->setQuantity(3)
            ->setUnitaryValue(4.50)
            ->setWeight(1)
    ]
);

//print_r($cart);die;
try {
    print_r($melhorEnvio->shipments()->addCartItem($cart));
} catch (\GuzzleHttp\Exception\RequestException $e) {
    if ($e->hasResponse()) {
        $response = $e->getResponse();
        var_dump($response->getStatusCode()); // HTTP status code;
        var_dump($response->getReasonPhrase()); // Response message;
        var_dump((string) $response->getBody()); // Body, normally it is JSON;
        var_dump(json_decode((string) $response->getBody())); // Body as the decoded JSON;
        var_dump($response->getHeaders()); // Headers array;
        var_dump($response->hasHeader('Content-Type')); // Is the header presented?
        var_dump($response->getHeader('Content-Type')[0]); // Concrete header value;
    }
}

/* end insertion of labels in the cart example */

function newProduct()
{
    return new \MelhorEnvio\Entities\Product();
}