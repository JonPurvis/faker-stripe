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
        return 'acct_' . $this->generateRandomString(16);
    }

    public function stripeApplicationFeeId(): string
    {
        return 'fee_' . $this->generateRandomString();
    }

    public function stripeBalanceTransactionId(): string
    {
        return 'txn_' . $this->generateRandomString(25);
    }

    public function stripeChargeId(): string
    {
        return 'ch_' . $this->generateRandomString();
    }

    public function stripeCustomerId(): string
    {
        return 'cus_' . $this->generateRandomString(14);
    }

    public function stripeDisputeId(): string
    {
        return 'dp_' . $this->generateRandomString();
    }

    public function stripeEventId(): string
    {
        return 'evt_' . $this->generateRandomString();
    }

    public function stripeFileId(): string
    {
        return 'file_' . $this->generateRandomString();
    }

    public function stripeFileLinkId(): string
    {
        return 'link_' . $this->generateRandomString();
    }

    public function stripeInvoiceId(): string
    {
        return 'in_' . $this->generateRandomString();
    }

    public function stripeInvoiceItemId(): string
    {
        return 'ii_' . $this->generateRandomString();
    }

    public function stripeMandateId(): string
    {
        return 'mandate_' . $this->generateRandomString();
    }

    public function stripePaymentIntentId(): string
    {
        return 'pi_' . $this->generateRandomString();
    }

    public function stripePayoutId(): string
    {
        return 'po_' . $this->generateRandomString();
    }

    public function stripeRefundId(): string
    {
        return 're_' . $this->generateRandomString();
    }

    public function stripeSetupIntentId(): string
    {
        return 'seti_' . $this->generateRandomString();
    }

    public function stripeSetupAttemptId(): string
    {
        return 'setatt_' . $this->generateRandomString();
    }

    public function stripeTokenId(): string
    {
        return 'tok_' . $this->generateRandomString();
    }
}