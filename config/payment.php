<?php

function loadEnv($path)
{
    if (!file_exists($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        list($name, $value) = explode('=', $line, 2);
        $_ENV[$name] = $value;
        putenv("$name=$value");
    }
}

loadEnv(__DIR__ . '/../.env');

return [
    'stripe_key' => $_ENV['STRIPE_KEY'] ?? '',
    'stripe_secret' => $_ENV['STRIPE_SECRET'] ?? '',
    'paypal_client_id' => $_ENV['PAYPAL_CLIENT_ID'] ?? '',
    'paypal_client_secret' => $_ENV['PAYPAL_CLIENT_SECRET'] ?? '',
];
