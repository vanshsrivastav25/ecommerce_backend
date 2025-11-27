<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'admin/*', 'login', '*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'], // Temporary - allow all

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false, // ✅ Change to false for now
];