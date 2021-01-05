<?php 

require_once 'vendor/autoload.php';

$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU0YjcyMGRhMzJiNDVlZjdkZjYyY2YzZWE4MGUxNzgyZmMwYTBmZWZmYTM5YTlkMDhiNWZmZjgzMThhMzY4YTM0MWNkMTViNDY1ZWFlZWE1In0.eyJhdWQiOiIxIiwianRpIjoiZTRiNzIwZGEzMmI0NWVmN2RmNjJjZjNlYTgwZTE3ODJmYzBhMGZlZmZhMzlhOWQwOGI1ZmZmODMxOGEzNjhhMzQxY2QxNWI0NjVlYWVlYTUiLCJpYXQiOjE2MDIyOTI2NTAsIm5iZiI6MTYwMjI5MjY1MCwiZXhwIjoxNjMzODI4NjUwLCJzdWIiOiI3NDI5ZDNlMC1hNDc0LTQ3ZDAtOTY4MS0yZTRlMWQ2OTAyNGQiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLWRlc3Ryb3kiLCJwcm9kdWN0cy13cml0ZSIsInB1cmNoYXNlcy1yZWFkIiwic2hpcHBpbmctY2FsY3VsYXRlIiwic2hpcHBpbmctY2FuY2VsIiwic2hpcHBpbmctY2hlY2tvdXQiLCJzaGlwcGluZy1jb21wYW5pZXMiLCJzaGlwcGluZy1nZW5lcmF0ZSIsInNoaXBwaW5nLXByZXZpZXciLCJzaGlwcGluZy1wcmludCIsInNoaXBwaW5nLXNoYXJlIiwic2hpcHBpbmctdHJhY2tpbmciLCJlY29tbWVyY2Utc2hpcHBpbmciLCJ0cmFuc2FjdGlvbnMtcmVhZCIsInVzZXJzLXJlYWQiLCJ1c2Vycy13cml0ZSIsIndlYmhvb2tzLXJlYWQiLCJ3ZWJob29rcy13cml0ZSJdfQ.oztgwp7wRmXHt6YASmipRWkT13qTHlcct_0m44vl8ZRtfv9hqtOeq-JCi5nK67QdZU3UJoFZBlnWDopvtdIcLQhgeac4F7pd2bMn5sF2WE0waR7IAR5SUMotOr7wqNRGKtodw0XB6-vFDo8OHGNJkMFqUSpz_tchIBOydck4ZaEDr16BrjiLJTVhSdE16InjG7TOEu4PDFTuT6l9MOvitsA-ZqFEEsFQH0ze7HpBIuPrTESvpyUyZr7tFlPdb-qA33TzjIV3YKE3GTVw1v0iAqL87SN2fO8sDH-XdQ-fTHSQ629FDERihaZkJsKTjaMnxdg_auu1Nw8BFF27ZI7fhLym5VBjyOWMkXXNKHOSU3gbibzNR84gKt-rNtx1jvwwyOiDY0MgmWYtieBQwIbg6kOxRZzfnmStu4gPWu-O2WvXMDzTJnrOowwOkSaCGdUP_wn67w-t8priiE4tt_8eT_Mx7nl0TwFHYqR3dgihw7B50IS_9NE-w3vBEMl4k0uiE7HA1-CpYuvqvmRsDP7f_3Awg2wWCZBAggxsm7hDXoTT2hswboSs6L243Ex35Yn0P0J0ZEO2r80FCHsKYadoFKx4h5AGZcfWlgK5_ZBxazV-qn2iLioH6NRnxNNR9K_XvxW2U-IHnKBEHO4L1Ad91YoLgXhj_s5VwOzW22EVCCs";
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