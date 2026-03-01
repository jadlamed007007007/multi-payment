<?php

require_once __DIR__ . '/src/PaymentGateway.php';

$config = require __DIR__ . '/config/payment.php';

$gateway = new PaymentGateway($config);

if (isset($_GET['method'])) {
    $method = $_GET['method'];
    $amount = $_GET['amount'] ?? 10;

    if ($method === 'stripe') {
        echo $gateway->processStripePayment($amount);
    } elseif ($method === 'paypal') {
        echo $gateway->processPayPalPayment($amount);
    } else {
        echo "Invalid payment method.";
    }
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Multi Payment Gateway</title>
</head>
<body>
    <h2>Select Payment Method</h2>
    <a href="?method=stripe&amount=50">
        <button>Pay with Stripe</button>
    </a>
    <a href="?method=paypal&amount=50">
        <button>Pay with PayPal</button>
    </a>
</body>
</html>
