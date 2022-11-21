<?php

return [
  'client_id' => env(key: 'PAYPAL_CLIENT_ID', default: ''),
  'secret'    => env(key: 'PAYPAL_SECRET', default: ''),
  'settings'  => [
    'mode' => env(key: 'PAYPAL_MODE', default: 'sandbox'),
    'http.ConnectionTimeOut' => 3000,
    'log.LogEnabled' => true,
    'log.FileName' => storage_path(path: 'logs/paypal.log'),
    'log.LogLevel' => 'ERROR',
  ],
];