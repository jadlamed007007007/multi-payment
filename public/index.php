<?php

require_once __DIR__ . '/../vendor/autoload.php';

use MultiPayment\Gateways\PaymentGateway;

$config = require __DIR__ . '/../config/payment.php';

$gateway = new PaymentGateway($config);

echo $gateway->process('stripe', 100);
