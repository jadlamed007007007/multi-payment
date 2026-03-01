<?php

class PaymentGateway
{
    private $stripeKey;
    private $stripeSecret;
    private $paypalClientId;
    private $paypalClientSecret;

    public function __construct($config)
    {
        $this->stripeKey = $config['stripe_key'];
        $this->stripeSecret = $config['stripe_secret'];
        $this->paypalClientId = $config['paypal_client_id'];
        $this->paypalClientSecret = $config['paypal_client_secret'];
    }

    public function processStripePayment($amount)
    {
        if (empty($this->stripeSecret)) {
            return "Stripe keys not configured.";
        }

        return "Stripe payment initialized for $" . $amount;
    }

    public function processPayPalPayment($amount)
    {
        if (empty($this->paypalClientSecret)) {
            return "PayPal keys not configured.";
        }

        return "PayPal payment initialized for $" . $amount;
    }
}
