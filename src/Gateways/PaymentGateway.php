<?php

namespace MultiPayment\Gateways;

class PaymentGateway
{
    protected array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function process(string $provider, float $amount): string
    {
        switch ($provider) {
            case 'stripe':
                return $this->processStripe($amount);
            case 'paypal':
                return $this->processPayPal($amount);
            default:
                throw new \Exception("Unsupported payment provider.");
        }
    }

    protected function processStripe(float $amount): string
    {
        return "Processing $$amount via Stripe...";
    }

    protected function processPayPal(float $amount): string
    {
        return "Processing $$amount via PayPal...";
    }
}
