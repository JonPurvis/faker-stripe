<?php

namespace Faker\Provider;

class Stripe extends Base
{
    private function generateRandomString($length = 24): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';
        $max = strlen($characters) - 1;

        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, $max)];
        }

        return $string;
    }
    public function stripeAccountId(): string
    {
        return 'acct_'.$this->generateRandomString(16);
    }

    public function stripeBalanceTransactionId(): string
    {
        return 'txn_'.$this->generateRandomString(25);
    }

    public function stripeChargeId(): string
    {
        return 'ch_'.$this->generateRandomString();
    }

    public function stripeCustomerId(): string
    {
        return 'cus_'.$this->generateRandomString(14);
    }

    public function stripeFeeId(): string
    {
        return 'fee_'.$this->generateRandomString();
    }

    public function stripeInvoiceId(): string
    {
        return 'in_'.$this->generateRandomString();
    }

    public function stripeInvoiceItemId(): string
    {
        return 'ii_'.$this->generateRandomString();
    }
}