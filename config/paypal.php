<?php

return [
    'client_id' => 'Ab0YuUnvFCgri8Ql0NCdDqORCq7sjqjiUvtgkmv8VNFum-gu575SmjRxLN5ib_sF_WJKGgaAQ0yHQ-wf',
    'secret' => 'EF38QQSq7WwGk_RxfM8oEhwYbPYQht0Pz6VicATwAJuYDFWMiW96yJSNaoJ8hyYlxTElZ7MeNOeaEv_-',
    'settings' => [
        'http.CURLOPT_CONNECTTIMEOUT' => 30,
        'mode' => 'sandbox', //Live
        'log.LogEnabled'=> true,
        'log.FileName' => storage_path().'/logs/paypal.php',
        'log.LogLevel' => 'INFO',
    ],
];
