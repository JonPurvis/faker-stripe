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

it('generates an application fee id', function () {
    expect($this->fake->stripeApplicationFeeId())->toStartWith('fee_')->toHaveLength(28);
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

it('generates a dispute id', function () {
    expect($this->fake->stripeDisputeId())->toStartWith('dp_')->toHaveLength(27);
});

it('generates an event id', function () {
    expect($this->fake->stripeEventId())->toStartWith('evt_')->toHaveLength(28);
});

it('generates a file id', function () {
    expect($this->fake->stripeFileId())->toStartWith('file_')->toHaveLength(29);
});

it('generates a file link id', function () {
    expect($this->fake->stripeFileLinkId())->toStartWith('link_')->toHaveLength(29);
});

it('generates an invoice id', function () {
    expect($this->fake->stripeInvoiceId())->toStartWith('in_')->toHaveLength(27);
});

it('generates an invoice item id', function () {
    expect($this->fake->stripeInvoiceItemId())->toStartWith('ii_')->toHaveLength(27);
});

it('generates a mandate id', function () {
    expect($this->fake->stripeMandateId())->toStartWith('mandate_')->toHaveLength(32);
});

it('generates a payment intent id', function () {
    expect($this->fake->stripePaymentIntentId())->toStartWith('pi_')->toHaveLength(27);
});

it('generates a payout id', function () {
    expect($this->fake->stripePayoutId())->toStartWith('po_')->toHaveLength(27);
});

it('generates a refund id', function () {
    expect($this->fake->stripeRefundId())->toStartWith('re_')->toHaveLength(27);
});

it('generates a setup intent id', function () {
    expect($this->fake->stripeSetupIntentId())->toStartWith('seti_')->toHaveLength(29);
});

it('generates a setup attempt id', function () {
    expect($this->fake->stripeSetupAttemptId())->toStartWith('setatt_')->toHaveLength(31);
});

it('generates a token id', function () {
    expect($this->fake->stripeTokenId())->toStartWith('tok_')->toHaveLength(28);
});