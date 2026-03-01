# 💳 Multi Payment Gateway

![Version](https://img.shields.io/packagist/v/mohamedjadla/multi-payment)
![Downloads](https://img.shields.io/packagist/dt/mohamedjadla/multi-payment)
![License](https://img.shields.io/packagist/l/mohamedjadla/multi-payment)
![Build](https://img.shields.io/github/actions/workflow/status/mohamedjadla/multi-payment/ci.yml)

# 💳 Multi Payment Gateway

![PHP](https://img.shields.io/badge/PHP-8.x-blue)
![Status](https://img.shields.io/badge/Build-Stable-brightgreen)
![License](https://img.shields.io/badge/License-MIT-green)

> A modern, lightweight and extensible multi payment gateway starter project built in pure PHP.

---

## ✨ Features

- Clean architecture
- Environment-based configuration
- Stripe integration ready
- PayPal integration ready
- Easy to extend
- Production-friendly structure

---
## 🚀 Usage Example

```php
require 'vendor/autoload.php';

use MultiPayment\Gateways\PaymentGateway;

$config = [
    'stripe_secret' => 'sk_test_xxxxx'
];

$gateway = new PaymentGateway($config);

echo $gateway->process('stripe', 100);

## 📂 Project Structure

