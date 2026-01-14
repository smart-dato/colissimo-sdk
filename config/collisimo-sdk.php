<?php

// config for SmartDato/Colissimo
return [
    'cache' => [
        'enabled' => env('COLISSIMO_CACHE', false),
        'cacheKey' => env('COLISSIMO_CACHE_KEY', 'dhl_express_wsdl_cache_key'),
        'ttlInSeconds' => env('COLISSIMO_CACHE_TTL'),
    ],
    'wsdl' => [
        'shipment' => 'https://ws.colissimo.fr/sls-ws/SlsServiceWS/2.0?wsdl',
        'tracking' => 'https://www.coliposte.fr/tracking-chargeur-cxf/TrackingServiceWS?wsdl',
    ],
    'auth' => [
        'contract' => env('COLISSIMO_CONTRACT'),
        'password' => env('COLISSIMO_PASSWORD'),
    ],
];
