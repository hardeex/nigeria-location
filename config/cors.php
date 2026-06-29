<?php

return [
    'paths' => ['api/*'],

    'allowed_methods' => ['GET', 'OPTIONS'],

    // Use wildcard since it's a public API
    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['Content-Type', 'Accept', 'Authorization'],

    'exposed_headers' => [],

    'max_age' => 86400,

    // IMPORTANT: must be false when using wildcard origin
    'supports_credentials' => false,
];
