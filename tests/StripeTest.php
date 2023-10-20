<?php

use Faker\Provider\Stripe;
use function Pest\Faker\fake;

beforeEach(function () {
    $this->fake = fake();
    $this->fake->addProvider(new Stripe($this->fake));
});

it('generates a connect account id', function () {
    expect($this->fake->stripeConnectAccountId())->toStartWith('acct_')->toHaveLength(21)->toBeString();
})->repeat(2);

it('generates a connect application fee id', function () {
    expect($this->fake->stripeConnectApplicationFeeId())->toStartWith('fee_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a core balance transaction id', function () {
    expect($this->fake->stripeCoreBalanceTransactionId())->toStartWith('txn_')->toHaveLength(29)->toBeString();
})->repeat(2);

it('generates a core charge id', function () {
    expect($this->fake->stripeCoreChargeId())->toStartWith('ch_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a core customer id', function () {
    expect($this->fake->stripeCoreCustomerId())->toStartWith('cus_')->toHaveLength(18)->toBeString();
})->repeat(2);

it('generates a core dispute id', function () {
    expect($this->fake->stripeCoreDisputeId())->toStartWith('dp_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a core event id', function () {
    expect($this->fake->stripeCoreEventId())->toStartWith('evt_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a core file id', function () {
    expect($this->fake->stripeCoreFileId())->toStartWith('file_')->toHaveLength(29)->toBeString();
})->repeat(2);

it('generates a core file link id', function () {
    expect($this->fake->stripeCoreFileLinkId())->toStartWith('link_')->toHaveLength(29)->toBeString();
})->repeat(2);

it('generates a billing invoice id', function () {
    expect($this->fake->stripeBillingInvoiceId())->toStartWith('in_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a billing invoice item id', function () {
    expect($this->fake->stripeBillingInvoiceItemId())->toStartWith('ii_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a core mandate id', function () {
    expect($this->fake->stripeCoreMandateId())->toStartWith('mandate_')->toHaveLength(32)->toBeString();
})->repeat(2);

it('generates a core payment intent id', function () {
    expect($this->fake->stripeCorePaymentIntentId())->toStartWith('pi_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a core payout id', function () {
    expect($this->fake->stripeCorePayoutId())->toStartWith('po_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a core refund id', function () {
    expect($this->fake->stripeCoreRefundId())->toStartWith('re_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a core setup intent id', function () {
    expect($this->fake->stripeCoreSetupIntentId())->toStartWith('seti_')->toHaveLength(29)->toBeString();
})->repeat(2);

it('generates a core setup attempt id', function () {
    expect($this->fake->stripeCoreSetupAttemptId())->toStartWith('setatt_')->toHaveLength(31)->toBeString();
})->repeat(2);

it('generates a core token id', function () {
    expect($this->fake->stripeCoreTokenId())->toStartWith('tok_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a payment method id', function () {
    expect($this->fake->stripePaymentMethodId())->toStartWith('pm_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a payment method bank account id', function () {
    expect($this->fake->stripePaymentMethodBankAccountId())->toStartWith('ba_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a payment method card id', function () {
    expect($this->fake->stripePaymentMethodCardId())->toStartWith('card_')->toHaveLength(29)->toBeString();
})->repeat(2);

it('generates a product id', function () {
    expect($this->fake->stripeProductId())->toStartWith('prod_')->toHaveLength(19)->toBeString();
})->repeat(2);

it('generates a product price id', function () {
    expect($this->fake->stripeProductPriceId())->toStartWith('price_')->toHaveLength(30)->toBeString();
})->repeat(2);

it('generates a product promotion code id', function () {
    expect($this->fake->stripeProductPromotionCodeId())->toStartWith('promo_')->toHaveLength(30)->toBeString();
})->repeat(2);

it('generates a product discount id', function () {
    expect($this->fake->stripeProductDiscountId())->toStartWith('di_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a product tax code id', function () {
    expect($this->fake->stripeProductTaxCodeId())->toStartWith('txcd_')->toHaveLength(13)->toBeString();
})->repeat(2);

it('generates a product tax rate id', function () {
    expect($this->fake->stripeProductTaxRateId())->toStartWith('txr_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a product shipping rate id', function () {
    expect($this->fake->stripeProductShippingRateId())->toStartWith('shr_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a checkout session id', function () {
    expect($this->fake->stripeCheckoutSessionId())->toStartWith('cs_')->toHaveLength(61)->toBeString();
})->repeat(2);

it('generates a payment link id', function () {
    expect($this->fake->stripePaymentLinkId())->toStartWith('plink_')->toHaveLength(30)->toBeString();
})->repeat(2);

it('generates a billing credit note id', function () {
    expect($this->fake->stripeBillingCreditNoteId())->toStartWith('cn_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a billing customer balance transaction id', function () {
    expect($this->fake->stripeBillingCustomerBalanceTransactionId())->toStartWith('cbtxn_')->toHaveLength(30)->toBeString();
})->repeat(2);

it('generates a billing customer portal id', function () {
    expect($this->fake->stripeBillingCustomerPortalId())->toStartWith('bps_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a billing customer tax id id', function () {
    expect($this->fake->stripeBillingCustomerTaxIdId())->toStartWith('txi_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a billing plan id', function () {
    expect($this->fake->stripeBillingPlanId())->toStartWith('price_')->toHaveLength(30)->toBeString();
})->repeat(2);

it('generates a billing quote id', function () {
    expect($this->fake->stripeBillingQuoteId())->toStartWith('qt_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a billing subscription id', function () {
    expect($this->fake->stripeBillingSubscriptionId())->toStartWith('sub_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a billing subscription item id', function () {
    expect($this->fake->stripeBillingSubscriptionItemId())->toStartWith('si_')->toHaveLength(17)->toBeString();
})->repeat(2);

it('generates a billing subscription schedule id', function () {
    expect($this->fake->stripeBillingSubscriptionScheduleId())->toStartWith('sub_sched_')->toHaveLength(34)->toBeString();
})->repeat(2);

it('generates a billing test clock id', function () {
    expect($this->fake->stripeBillingTestClockId())->toStartWith('clock_')->toHaveLength(30)->toBeString();
})->repeat(2);

it('generates a billing usage record id', function () {
    expect($this->fake->stripeBillingUsageRecordId())->toStartWith('mbur_')->toHaveLength(29)->toBeString();
})->repeat(2);

it('generates a connect application fee refund id', function () {
    expect($this->fake->stripeConnectApplicationFeeRefundId())->toStartWith('fr_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a connect external account id', function () {
    expect($this->fake->stripeConnectExternalAccountId())->toStartWith('ba_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a connect person id', function () {
    expect($this->fake->stripeConnectPersonId())->toStartWith('person_')->toHaveLength(31)->toBeString();
})->repeat(2);

it('generates a connect top up id', function () {
    expect($this->fake->stripeConnectTopUpId())->toStartWith('tu_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a connect transfer id', function () {
    expect($this->fake->stripeConnectTransferId())->toStartWith('tr_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a connect transfer reversal id', function () {
    expect($this->fake->stripeConnectTransferReversalId())->toStartWith('trr_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a connect secret management id', function () {
    expect($this->fake->stripeConnectSecretManagementId())->toStartWith('appsecret_')->toHaveLength(34)->toBeString();
})->repeat(2);

it('generates a fraud early fraud warning id', function () {
    expect($this->fake->stripeFraudEarlyFraudWarningId())->toStartWith('issfr_')->toHaveLength(30)->toBeString();
})->repeat(2);

it('generates a fraud review id', function () {
    expect($this->fake->stripeFraudReviewId())->toStartWith('prv_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a fraud value list id', function () {
    expect($this->fake->stripeFraudValueListId())->toStartWith('rsl_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a fraud value list item id', function () {
    expect($this->fake->stripeFraudValueListItemId())->toStartWith('rsli_')->toHaveLength(29)->toBeString();
})->repeat(2);

it('generates an issuing authorization id', function () {
    expect($this->fake->stripeIssuingAuthorizationId())->toStartWith('iauth_')->toHaveLength(30)->toBeString();
})->repeat(2);

it('generates an issuing cardholder id', function () {
    expect($this->fake->stripeIssuingCardholderId())->toStartWith('ich_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates an issuing card id', function () {
    expect($this->fake->stripeIssuingCardId())->toStartWith('ic_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates an issuing dispute id', function () {
    expect($this->fake->stripeIssuingDisputeId())->toStartWith('idp_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates an issuing transaction id', function () {
    expect($this->fake->stripeIssuingTransactionId())->toStartWith('ipi_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a terminal location id', function () {
    expect($this->fake->stripeTerminalLocationId())->toStartWith('tml_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a terminal reader id', function () {
    expect($this->fake->stripeTerminalReaderId())->toStartWith('tmr_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a terminal hardware order id', function () {
    expect($this->fake->stripeTerminalHardwareOrderId())->toStartWith('thor_')->toHaveLength(29)->toBeString();
})->repeat(2);

it('generates a terminal hardware product id', function () {
    expect($this->fake->stripeTerminalHardwareProductId())->toStartWith('thpr_')->toHaveLength(19)->toBeString();
})->repeat(2);

it('generates a terminal hardware sku', function () {
    expect($this->fake->stripeTerminalHardwareSkuId())->toStartWith('thsku_')->toHaveLength(20)->toBeString();
})->repeat(2);

it('generates a terminal hardware shipping method id', function () {
    expect($this->fake->stripeTerminalHardwareShippingMethodId())->toStartWith('thsm_')->toHaveLength(19)->toBeString();
})->repeat(2);

it('generates a terminal configuration id', function () {
    expect($this->fake->stripeTerminalConfigurationId())->toStartWith('tmc_')->toHaveLength(18)->toBeString();
})->repeat(2);

it('generates a treasury financial account id', function () {
    expect($this->fake->stripeTreasuryFinancialAccountId())->toStartWith('fa_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a treasury transaction id', function () {
    expect($this->fake->stripeTreasuryTransactionId())->toStartWith('trxn_')->toHaveLength(29)->toBeString();
})->repeat(2);

it('generates a treasury transaction entry id', function () {
    expect($this->fake->stripeTreasuryTransactionEntryId())->toStartWith('trxne_')->toHaveLength(30)->toBeString();
})->repeat(2);

it('generates a treasury outbound transfer id', function () {
    expect($this->fake->stripeTreasuryOutboundTransferId())->toStartWith('obt_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a treasury outbound payment id', function () {
    expect($this->fake->stripeTreasuryOutboundPaymentId())->toStartWith('obp_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a treasury inbound transfer id', function () {
    expect($this->fake->stripeTreasuryInboundTransferId())->toStartWith('ibt_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a treasury received credit id', function () {
    expect($this->fake->stripeTreasuryReceivedCreditId())->toStartWith('rc_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a treasury received debit id', function () {
    expect($this->fake->stripeTreasuryReceivedDebitId())->toStartWith('rd_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a treasury credit reversal id', function () {
    expect($this->fake->stripeTreasuryCreditReversalId())->toStartWith('credrev_')->toHaveLength(32)->toBeString();
})->repeat(2);

it('generates a treasury debit reversal id', function () {
    expect($this->fake->stripeTreasuryDebitReversalId())->toStartWith('debrev_')->toHaveLength(31)->toBeString();
})->repeat(2);

it('generates a scheduled query run id', function () {
    expect($this->fake->stripeSigmaScheduledQueryRunId())->toStartWith('sqr_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a reporting report run id', function () {
    expect($this->fake->stripeReportingReportRunId())->toStartWith('frr_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a financial connection account id', function () {
    expect($this->fake->stripeFinancialConnectionAccountId())->toStartWith('fca_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a financial connection account ownership id', function () {
    expect($this->fake->stripeFinancialConnectionAccountOwnershipId())->toStartWith('fcaowns_')->toHaveLength(32)->toBeString();
})->repeat(2);

it('generates a financial connection session id', function () {
    expect($this->fake->stripeFinancialConnectionSessionId())->toStartWith('fcsess_')->toHaveLength(31)->toBeString();
})->repeat(2);

it('generates a financial connection transaction id', function () {
    expect($this->fake->stripeFinancialConnectionTransactionId())->toStartWith('fctxn_')->toHaveLength(30)->toBeString();
})->repeat(2);

it('generates a tax calculation id', function () {
    expect($this->fake->stripeTaxCalculationId())->toStartWith('taxcalc_')->toHaveLength(32)->toBeString();
})->repeat(2);

it('generates a tax transaction id', function () {
    expect($this->fake->stripeTaxTransactionId())->toStartWith('tax_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a identity verification session id', function () {
    expect($this->fake->stripeIdentityVerificationSessionId())->toStartWith('vs_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a identity verification report id', function () {
    expect($this->fake->stripeIdentityVerificationReportId())->toStartWith('vr_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a webhook endpoint id', function () {
    expect($this->fake->stripeWebhookEndpointId())->toStartWith('we_')->toHaveLength(27)->toBeString();
})->repeat(2);

it('generates a financial connection transaction refresh id', function () {
    expect($this->fake->stripeFinancialConnectionTransactionRefreshId())->toStartWith('fctxnref_')->toHaveLength(33)->toBeString();
})->repeat(2);

it('generates a tax transaction line item id', function () {
    expect($this->fake->stripeTaxTransactionLineItemId())->toStartWith('tax_li_')->toHaveLength(21)->toBeString();
})->repeat(2);

it('generates a webhook application id', function () {
    expect($this->fake->stripeWebhookApplicationId())->toStartWith('ca_')->toHaveLength(35)->toBeString();
})->repeat(2);

it('generates a crypto onramp session id', function () {
    expect($this->fake->stripeCryptoOnrampSessionId())->toStartWith('cos_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a payment intent client secret', function () {
    expect($this->fake->stripeCorePaymentIntentClientSecret())->toStartWith('pi_')->toContain('_secret_')->toHaveLength(60)->toBeString();
})->repeat(2);

it('generates a crypto onramp session client secret', function () {
    expect($this->fake->stripeCryptoOnrampSessionClientSecret())->toStartWith('cos_')->toContain('_secret_')->toHaveLength(71)->toBeString();
})->repeat(2);

it('generates a connect capability id', function () {
    expect($this->fake->stripeConnectCapabilityId())->toStartWith('acap_')->toHaveLength(29)->toBeString();
})->repeat(2);

it('generates a cash balance transaction id', function () {
    expect($this->fake->stripeCashBalanceTransactionId())->toStartWith('ccsbtxn_')->toHaveLength(32)->toBeString();
})->repeat(2);

it('generates a issuing token id', function () {
    expect($this->fake->stripeIssuingTokenId())->toStartWith('intok_')->toHaveLength(30)->toBeString();
})->repeat(2);

it('generates a payment method configuration id', function () {
    expect($this->fake->stripePaymentMethodConfigurationId())->toStartWith('pmc_')->toHaveLength(28)->toBeString();
})->repeat(2);

it('generates a payment method domain id', function () {
    expect($this->fake->stripePaymentMethodDomainId())->toStartWith('pmd_')->toHaveLength(28)->toBeString();
})->repeat(2);