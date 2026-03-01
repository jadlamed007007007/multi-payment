<?php

namespace MultiPayment\Gateways;

use MultiPayment\Exceptions\PaymentException;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class StripeGateway
{
    protected string $secret;

    public function __construct(string $secret)
    {
        $this->secret = $secret;
    }

    public function charge(float $amount): string
    {
        if ($amount <= 0) {
            throw new PaymentException("Invalid amount.");
        }

        Stripe::setApiKey($this->secret);

        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => $amount * 100,
                'currency' => 'usd',
                'payment_method_types' => ['card'],
            ]);

            return $paymentIntent->id;

        } catch (\Exception $e) {
            throw new PaymentException($e->getMessage());
        }
    }
}
