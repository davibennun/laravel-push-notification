<?php

return [

    'appNameIOS'     => [
        'environment' => 'development',
        'certificate' => '/path/to/certificate.pem',
        'passPhrase'  => 'password',
        'service'     => 'apns',
    ],
    'appNameAndroid' => [
        'environment' => 'production',
        'apiKey'      => 'yourAPIKey',
        'service'     => 'gcm',
    ],

];
