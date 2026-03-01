<?php

namespace MultiPayment\Gateways;

use MultiPayment\Exceptions\PaymentException;

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
                if (!isset($this->config['stripe_secret'])) {
                    throw new PaymentException("Stripe secret key not configured.");
                }

                $stripe = new StripeGateway($this->config['stripe_secret']);
                return $stripe->charge($amount);

            default:
                throw new PaymentException("Unsupported payment provider.");
        }
    }
}
