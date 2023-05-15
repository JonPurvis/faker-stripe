<?php

use Faker\Provider\Stripe;
use function Pest\Faker\fake;

beforeEach(function () {
    $this->fake = fake();
    $this->fake->addProvider(new Stripe($this->fake));
});

it('generates an account id', function () {
    expect($this->fake->stripeAccountId())->toStartWith('acct_')->toHaveLength(21);
});

it('generates a balance transaction id', function () {
    expect($this->fake->stripeBalanceTransactionId())->toStartWith('txn_')->toHaveLength(29);
});

it('generates a charge id', function () {
    expect($this->fake->stripeChargeId())->toStartWith('ch_')->toHaveLength(27);
});

it('generates a customer id', function () {
    expect($this->fake->stripeCustomerId())->toStartWith('cus_')->toHaveLength(18);
});

it('generates a fee id', function () {
    expect($this->fake->stripeFeeId())->toStartWith('fee_')->toHaveLength(28);
});

it('generates an invoice id', function () {
    expect($this->fake->stripeInvoiceId())->toStartWith('in_')->toHaveLength(27);
});

it('generates an invoice item id', function () {
    expect($this->fake->stripeInvoiceItemId())->toStartWith('ii_')->toHaveLength(27);
});