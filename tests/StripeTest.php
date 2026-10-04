<?php

use Faker\Provider\Stripe;

use function Pest\Faker\fake;

beforeEach(function (): void {
    $this->fake = fake();
    $this->fake->addProvider(new Stripe($this->fake));
});

it('generates a core balance transaction id', function (): void {
    expect($this->fake->stripeCoreBalanceTransactionId())->toStartWith('txn_')->toHaveLength(29)->toBeString();
});

it('generates a core charge id', function (): void {
    expect($this->fake->stripeCoreChargeId())->toStartWith('ch_')->toHaveLength(27)->toBeString();
});

it('generates a core customer id', function (): void {
    expect($this->fake->stripeCoreCustomerId())->toStartWith('cus_')->toHaveLength(18)->toBeString();
});

it('generates a core dispute id', function (): void {
    expect($this->fake->stripeCoreDisputeId())->toStartWith('dp_')->toHaveLength(27)->toBeString();
});

it('generates a core event id', function (): void {
    expect($this->fake->stripeCoreEventId())->toStartWith('evt_')->toHaveLength(28)->toBeString();
});

it('generates an event destination id', function (): void {
    expect($this->fake->stripeCoreEventDestinationId())->toStartWith('ed_')->toHaveLength(27)->toBeString();
});

it('generates a core file id', function (): void {
    expect($this->fake->stripeCoreFileId())->toStartWith('file_')->toHaveLength(29)->toBeString();
});

it('generates a core file link id', function (): void {
    expect($this->fake->stripeCoreFileLinkId())->toStartWith('link_')->toHaveLength(29)->toBeString();
});

it('generates a core fx quote id', function (): void {
    expect($this->fake->stripeCoreFxQuoteId())->toStartWith('fxq_')->toHaveLength(28)->toBeString();
});

it('generates a core mandate id', function (): void {
    expect($this->fake->stripeCoreMandateId())->toStartWith('mandate_')->toHaveLength(32)->toBeString();
});

it('generates a core payment intent id', function (): void {
    expect($this->fake->stripeCorePaymentIntentId())->toStartWith('pi_')->toHaveLength(27)->toBeString();
});

it('generates a payment intent client secret', function (): void {
    expect($this->fake->stripeCorePaymentIntentClientSecret())->toStartWith('pi_')->toContain('_secret_')->toHaveLength(60)->toBeString();
});

it('generates a payment intent line item id', function (): void {
    expect($this->fake->stripeCorePaymentIntentLineItemId())->toStartWith('uli_')->toHaveLength(18)->toBeString();
});

it('generates an ephemeral key id', function (): void {
    expect($this->fake->stripeCoreEphemeralKeyId())->toStartWith('ephkey_')->toHaveLength(31)->toBeString();
});

it('generates a core setup intent id', function (): void {
    expect($this->fake->stripeCoreSetupIntentId())->toStartWith('seti_')->toHaveLength(29)->toBeString();
});

it('generates a setup intent client secret', function (): void {
    expect($this->fake->stripeCoreSetupIntentClientSecret())->toStartWith('seti_')->toHaveLength(68)->toBeString();
});

it('generates a core setup attempt id', function (): void {
    expect($this->fake->stripeCoreSetupAttemptId())->toStartWith('setatt_')->toHaveLength(31)->toBeString();
});

it('generates a core payout id', function (): void {
    expect($this->fake->stripeCorePayoutId())->toStartWith('po_')->toHaveLength(27)->toBeString();
});

it('generates a core refund id', function (): void {
    expect($this->fake->stripeCoreRefundId())->toStartWith('re_')->toHaveLength(27)->toBeString();
});

it('generates a core payment record id', function (): void {
    expect($this->fake->stripeCorePaymentRecordId())->toStartWith('pr_')->toHaveLength(27)->toBeString();
});

it('generates a core payment attempt record id', function (): void {
    expect($this->fake->stripeCorePaymentAttemptRecordId())->toStartWith('par_')->toHaveLength(28)->toBeString();
});

it('generates a confirmation token id', function (): void {
    expect($this->fake->stripeCoreConfirmationTokenId())->toStartWith('ctoken_')->toHaveLength(31)->toBeString();
});

it('generates a core account token id', function (): void {
    expect($this->fake->stripeCoreAccountTokenId())->toStartWith('ct_')->toHaveLength(27)->toBeString();
});

it('generates a core bank account token id', function (): void {
    expect($this->fake->stripeCoreBankAccountTokenId())->toStartWith('btok_')->toHaveLength(29)->toBeString();
});

it('generates a core token id', function (): void {
    expect($this->fake->stripeCoreTokenId())->toStartWith('tok_')->toHaveLength(28)->toBeString();
});

it('generates a core cvc token id', function (): void {
    expect($this->fake->stripeCoreCvcUpdateTokenId())->toStartWith('cvctok_')->toHaveLength(31)->toBeString();
});

it('generates a core person token id', function (): void {
    expect($this->fake->stripeCorePersonTokenId())->toStartWith('cpt_')->toHaveLength(28)->toBeString();
});

it('generates a v2 account token id', function (): void {
    expect($this->fake->stripeV2AccountTokenId())->toStartWith('accttok_')->toHaveLength(52)->toBeString();
});

it('generates a v2 person token id', function (): void {
    expect($this->fake->stripeV2PersonTokenId())->toStartWith('perstok_')->toHaveLength(52)->toBeString();
});

it('generates a core pii token id', function (): void {
    expect($this->fake->stripeCorePersonallyIdentifiableInformationTokenId())->toStartWith('pii_')->toHaveLength(28)->toBeString();
});

it('generates a core batch job id', function (): void {
    expect($this->fake->stripeCoreBatchJobId())->toStartWith('batchv2_')->toHaveLength(34)->toBeString();
});

it('generates a core workflow id', function (): void {
    expect($this->fake->stripeCoreWorkflowId())->toStartWith('wf_')->toHaveLength(27)->toBeString();
});

it('generates a core workflow run id', function (): void {
    expect($this->fake->stripeCoreWorkflowRunId())->toStartWith('wfrun_')->toHaveLength(30)->toBeString();
});

it('generates a payment method id', function (): void {
    expect($this->fake->stripePaymentMethodId())->toStartWith('pm_')->toHaveLength(27)->toBeString();
});

it('generates a payment method configuration id', function (): void {
    expect($this->fake->stripePaymentMethodConfigurationId())->toStartWith('pmc_')->toHaveLength(28)->toBeString();
});

it('generates a payment method domain id', function (): void {
    expect($this->fake->stripePaymentMethodDomainId())->toStartWith('pmd_')->toHaveLength(28)->toBeString();
});

it('generates a payment method bank account id', function (): void {
    expect($this->fake->stripePaymentMethodBankAccountId())->toStartWith('ba_')->toHaveLength(27)->toBeString();
});

it('generates a cash balance transaction id', function (): void {
    expect($this->fake->stripeCashBalanceTransactionId())->toStartWith('ccsbtxn_')->toHaveLength(32)->toBeString();
});

it('generates a payment method card id', function (): void {
    expect($this->fake->stripePaymentMethodCardId())->toStartWith('card_')->toHaveLength(29)->toBeString();
});

it('generates a product id', function (): void {
    expect($this->fake->stripeProductId())->toStartWith('prod_')->toHaveLength(19)->toBeString();
});

it('generates a product price id', function (): void {
    expect($this->fake->stripeProductPriceId())->toStartWith('price_')->toHaveLength(30)->toBeString();
});

it('generates a product promotion code id', function (): void {
    expect($this->fake->stripeProductPromotionCodeId())->toStartWith('promo_')->toHaveLength(30)->toBeString();
});

it('generates a product discount id', function (): void {
    expect($this->fake->stripeProductDiscountId())->toStartWith('di_')->toHaveLength(27)->toBeString();
});

it('generates a product tax code id', function (): void {
    expect($this->fake->stripeProductTaxCodeId())->toStartWith('txcd_')->toHaveLength(13)->toBeString();
});

it('generates a product tax rate id', function (): void {
    expect($this->fake->stripeProductTaxRateId())->toStartWith('txr_')->toHaveLength(28)->toBeString();
});

it('generates a product shipping rate id', function (): void {
    expect($this->fake->stripeProductShippingRateId())->toStartWith('shr_')->toHaveLength(28)->toBeString();
});

it('generates a product trial offer id', function (): void {
    expect($this->fake->stripeProductTrialOfferId())->toStartWith('to_')->toHaveLength(27)->toBeString();
});

it('generates a product catalog import id', function (): void {
    expect($this->fake->stripeProductCatalogImportId())->toStartWith('pcimprt_')->toHaveLength(52)->toBeString();
});

it('generates a checkout session id', function (): void {
    expect($this->fake->stripeCheckoutSessionId())->toStartWith('cs_')->toHaveLength(61)->toBeString();
});

it('generates a checkout session line item id', function (): void {
    expect($this->fake->stripeCheckoutSessionLineItemId())->toStartWith('li_')->toHaveLength(27)->toBeString();
});

it('generates a payment link id', function (): void {
    expect($this->fake->stripePaymentLinkId())->toStartWith('plink_')->toHaveLength(30)->toBeString();
});

it('generates a shared payment issued token id', function (): void {
    expect($this->fake->stripeSharedPaymentIssuedTokenId())->toStartWith('spt_')->toHaveLength(28)->toBeString();
});

it('generates a shared payment granted token id', function (): void {
    expect($this->fake->stripeSharedPaymentGrantedTokenId())->toStartWith('spt_')->toHaveLength(28)->toBeString();
});

it('generates a billing credit note id', function (): void {
    expect($this->fake->stripeBillingCreditNoteId())->toStartWith('cn_')->toHaveLength(27)->toBeString();
});

it('generates a billing credit note line item id', function (): void {
    expect($this->fake->stripeBillingCreditNoteLineItemId())->toStartWith('il_')->toHaveLength(27)->toBeString();
});

it('generates a billing credit balance transaction id', function (): void {
    expect($this->fake->stripeBillingCreditBalanceTransactionId())->toStartWith('cbtxn_')->toHaveLength(30)->toBeString();
});

it('generates a billing customer portal id', function (): void {
    expect($this->fake->stripeBillingCustomerPortalId())->toStartWith('bps_')->toHaveLength(28)->toBeString();
});

it('generates a billing customer portal configuration id', function (): void {
    expect($this->fake->stripeBillingCustomerPortalConfigurationId())->toStartWith('bpc_')->toHaveLength(28)->toBeString();
});

it('generates a billing invoice id', function (): void {
    expect($this->fake->stripeBillingInvoiceId())->toStartWith('in_')->toHaveLength(27)->toBeString();
});

it('generates a billing invoice item id', function (): void {
    expect($this->fake->stripeBillingInvoiceItemId())->toStartWith('ii_')->toHaveLength(27)->toBeString();
});

it('generates a billing invoice line item id', function (): void {
    expect($this->fake->stripeBillingInvoiceLineItemId())->toStartWith('il_tmp_')->toHaveLength(31)->toBeString();
});

it('generates a billing invoice payment id', function (): void {
    expect($this->fake->stripeBillingInvoicePaymentId())->toStartWith('inpay_')->toHaveLength(30)->toBeString();
});

it('generates a invoice rendering template id', function (): void {
    expect($this->fake->stripeBillingInvoiceRenderingTemplateId())->toStartWith('inrtem_')->toHaveLength(31)->toBeString();
});

it('generates a billing alert id', function (): void {
    expect($this->fake->stripeBillingAlertId())->toStartWith('alrt_')->toHaveLength(10)->toBeString();
});

it('generates a billing alert notification id', function (): void {
    expect($this->fake->stripeBillingAlertNotificationId())->toStartWith('threvt_')->toHaveLength(31)->toBeString();
});

it('generates a billing meter id', function (): void {
    expect($this->fake->stripeBillingMeterId())->toStartWith('mtr_')->toHaveLength(9)->toBeString();
});

it('generates a billing meter event adjustment id', function (): void {
    expect($this->fake->stripeBillingMeterAdjustmentId())->toStartWith('mtr_event_adj_')->toHaveLength(22)->toBeString();
});

it('generates a billing meter event summary id', function (): void {
    expect($this->fake->stripeBillingMeterEventSummaryId())->toStartWith('mtrusg_')->toHaveLength(192)->toBeString();
});

it('generates a credit grant id', function (): void {
    expect($this->fake->stripeBillingCreditGrantId())->toStartWith('credgr_')->toHaveLength(31)->toBeString();
});

it('generates a credit grant crgr id', function (): void {
    expect($this->fake->stripeBillingCreditGrantCrgrId())->toStartWith('crgr_')->toHaveLength(29)->toBeString();
});

it('generates a billing customer balance transaction id', function (): void {
    expect($this->fake->stripeBillingCustomerBalanceTransactionId())->toStartWith('cbtxn_')->toHaveLength(30)->toBeString();
});

it('generates a billing plan id', function (): void {
    expect($this->fake->stripeBillingPlanId())->toStartWith('price_')->toHaveLength(30)->toBeString();
});

it('generates a billing quote id', function (): void {
    expect($this->fake->stripeBillingQuoteId())->toStartWith('qt_')->toHaveLength(27)->toBeString();
});

it('generates a billing subscription id', function (): void {
    expect($this->fake->stripeBillingSubscriptionId())->toStartWith('sub_')->toHaveLength(28)->toBeString();
});

it('generates a billing subscription item id', function (): void {
    expect($this->fake->stripeBillingSubscriptionItemId())->toStartWith('si_')->toHaveLength(17)->toBeString();
});

it('generates a billing subscription schedule id', function (): void {
    expect($this->fake->stripeBillingSubscriptionScheduleId())->toStartWith('sub_sched_')->toHaveLength(34)->toBeString();
});

it('generates a billing customer tax id id', function (): void {
    expect($this->fake->stripeBillingCustomerTaxIdId())->toStartWith('txi_')->toHaveLength(28)->toBeString();
});

it('generates a billing test clock id', function (): void {
    expect($this->fake->stripeBillingTestClockId())->toStartWith('clock_')->toHaveLength(30)->toBeString();
});

it('generates a billing feedback option id', function (): void {
    expect($this->fake->stripeBillingFeedbackOptionId())->toStartWith('fo_')->toHaveLength(27)->toBeString();
});

it('generates a financing offer id', function (): void {
    expect($this->fake->stripeFinancingOfferId())->toStartWith('financingoffer_')->toHaveLength(39)->toBeString();
});

it('generates a reserve plan id', function (): void {
    expect($this->fake->stripeReservePlanId())->toStartWith('resplan_')->toHaveLength(37)->toBeString();
});

it('generates a reserve hold id', function (): void {
    expect($this->fake->stripeReserveHoldId())->toStartWith('reshold_')->toHaveLength(37)->toBeString();
});

it('generates a reserve release id', function (): void {
    expect($this->fake->stripeReserveReleaseId())->toStartWith('resrel_')->toHaveLength(36)->toBeString();
});

it('generates a connect account id', function (): void {
    expect($this->fake->stripeConnectAccountId())->toStartWith('acct_')->toHaveLength(21)->toBeString();
});

it('generates a connect destination charge id', function (): void {
    expect($this->fake->stripeConnectDestinationChargeId())->toStartWith('py_')->toHaveLength(27)->toBeString();
});

it('generates a connect destination charge refund id', function (): void {
    expect($this->fake->stripeConnectDestinationChargeRefundId())->toStartWith('pyr_')->toHaveLength(28)->toBeString();
});

it('generates a connect application fee id', function (): void {
    expect($this->fake->stripeConnectApplicationFeeId())->toStartWith('fee_')->toHaveLength(28)->toBeString();
});

it('generates a connect application fee refund id', function (): void {
    expect($this->fake->stripeConnectApplicationFeeRefundId())->toStartWith('fr_')->toHaveLength(27)->toBeString();
});

it('generates a connect capability id', function (): void {
    expect($this->fake->stripeConnectCapabilityId())->toStartWith('acap_')->toHaveLength(29)->toBeString();
});

it('generates a connect external account id', function (): void {
    expect($this->fake->stripeConnectExternalAccountId())->toStartWith('ba_')->toHaveLength(27)->toBeString();
});

it('generates an external account card id', function (): void {
    expect($this->fake->stripeExternalAccountCardId())->toStartWith('card_')->toHaveLength(29)->toBeString();
});

it('generates a connect person id', function (): void {
    expect($this->fake->stripeConnectPersonId())->toStartWith('person_')->toHaveLength(31)->toBeString();
});

it('generates a connect top up id', function (): void {
    expect($this->fake->stripeConnectTopUpId())->toStartWith('tu_')->toHaveLength(27)->toBeString();
});

it('generates a connect transfer id', function (): void {
    expect($this->fake->stripeConnectTransferId())->toStartWith('tr_')->toHaveLength(27)->toBeString();
});

it('generates a connect transfer reversal id', function (): void {
    expect($this->fake->stripeConnectTransferReversalId())->toStartWith('trr_')->toHaveLength(28)->toBeString();
});

it('generates a connect secret management id', function (): void {
    expect($this->fake->stripeConnectSecretManagementId())->toStartWith('appsecret_')->toHaveLength(34)->toBeString();
});

it('generates a fraud early fraud warning id', function (): void {
    expect($this->fake->stripeFraudEarlyFraudWarningId())->toStartWith('issfr_')->toHaveLength(30)->toBeString();
});

it('generates a fraud review id', function (): void {
    expect($this->fake->stripeFraudReviewId())->toStartWith('prv_')->toHaveLength(28)->toBeString();
});

it('generates a fraud value list id', function (): void {
    expect($this->fake->stripeFraudValueListId())->toStartWith('rsl_')->toHaveLength(28)->toBeString();
});

it('generates a fraud value list item id', function (): void {
    expect($this->fake->stripeFraudValueListItemId())->toStartWith('rsli_')->toHaveLength(29)->toBeString();
});

it('generates a fraud payment evaluation id', function (): void {
    expect($this->fake->stripeFraudPaymentEvaluationId())->toStartWith('peval_')->toHaveLength(30)->toBeString();
});

it('generates a fraud customer evaluation id', function (): void {
    expect($this->fake->stripeFraudCustomerEvaluationId())->toStartWith('cuseval_')->toHaveLength(32)->toBeString();
});

it('generates a fraud radar session id', function (): void {
    expect($this->fake->stripeFraudRadarSessionId())->toStartWith('rse_')->toHaveLength(28)->toBeString();
});

it('generates an issuing authorization id', function (): void {
    expect($this->fake->stripeIssuingAuthorizationId())->toStartWith('iauth_')->toHaveLength(30)->toBeString();
});

it('generates an issuing cardholder id', function (): void {
    expect($this->fake->stripeIssuingCardholderId())->toStartWith('ich_')->toHaveLength(28)->toBeString();
});

it('generates an issuing card id', function (): void {
    expect($this->fake->stripeIssuingCardId())->toStartWith('ic_')->toHaveLength(27)->toBeString();
});

it('generates an issuing dispute id', function (): void {
    expect($this->fake->stripeIssuingDisputeId())->toStartWith('idp_')->toHaveLength(28)->toBeString();
});

it('generates an issuing personalization design id', function (): void {
    expect($this->fake->stripeIssuingPersonalizationDesignsId())->toStartWith('ipcd_')->toHaveLength(19)->toBeString();
});

it('generates an issuing physical bundles id', function (): void {
    expect($this->fake->stripeIssuingPhysicalBundlesId())->toStartWith('ics_')->toHaveLength(18)->toBeString();
});

it('generates a issuing token id', function (): void {
    expect($this->fake->stripeIssuingTokenId())->toStartWith('intok_')->toHaveLength(30)->toBeString();
});

it('generates an issuing transaction id', function (): void {
    expect($this->fake->stripeIssuingTransactionId())->toStartWith('ipi_')->toHaveLength(28)->toBeString();
});

it('generates a terminal location id', function (): void {
    expect($this->fake->stripeTerminalLocationId())->toStartWith('tml_')->toHaveLength(28)->toBeString();
});

it('generates a terminal reader id', function (): void {
    expect($this->fake->stripeTerminalReaderId())->toStartWith('tmr_')->toHaveLength(28)->toBeString();
});

it('generates a terminal hardware order id', function (): void {
    expect($this->fake->stripeTerminalHardwareOrderId())->toStartWith('thor_')->toHaveLength(29)->toBeString();
});

it('generates a terminal hardware product id', function (): void {
    expect($this->fake->stripeTerminalHardwareProductId())->toStartWith('thpr_')->toHaveLength(19)->toBeString();
});

it('generates a terminal hardware sku', function (): void {
    expect($this->fake->stripeTerminalHardwareSkuId())->toStartWith('thsku_')->toHaveLength(20)->toBeString();
});

it('generates a terminal hardware shipping method id', function (): void {
    expect($this->fake->stripeTerminalHardwareShippingMethodId())->toStartWith('thsm_')->toHaveLength(19)->toBeString();
});

it('generates a terminal configuration id', function (): void {
    expect($this->fake->stripeTerminalConfigurationId())->toStartWith('tmc_')->toHaveLength(18)->toBeString();
});

it('generates a treasury financial account id', function (): void {
    expect($this->fake->stripeTreasuryFinancialAccountId())->toStartWith('fa_')->toHaveLength(27)->toBeString();
});

it('generates a treasury transaction id', function (): void {
    expect($this->fake->stripeTreasuryTransactionId())->toStartWith('trxn_')->toHaveLength(29)->toBeString();
});

it('generates a treasury transaction entry id', function (): void {
    expect($this->fake->stripeTreasuryTransactionEntryId())->toStartWith('trxne_')->toHaveLength(30)->toBeString();
});

it('generates a treasury outbound transfer id', function (): void {
    expect($this->fake->stripeTreasuryOutboundTransferId())->toStartWith('obt_')->toHaveLength(28)->toBeString();
});

it('generates a treasury outbound payment id', function (): void {
    expect($this->fake->stripeTreasuryOutboundPaymentId())->toStartWith('obp_')->toHaveLength(28)->toBeString();
});

it('generates a treasury inbound transfer id', function (): void {
    expect($this->fake->stripeTreasuryInboundTransferId())->toStartWith('ibt_')->toHaveLength(28)->toBeString();
});

it('generates a treasury received credit id', function (): void {
    expect($this->fake->stripeTreasuryReceivedCreditId())->toStartWith('rc_')->toHaveLength(27)->toBeString();
});

it('generates a treasury received debit id', function (): void {
    expect($this->fake->stripeTreasuryReceivedDebitId())->toStartWith('rd_')->toHaveLength(27)->toBeString();
});

it('generates a treasury credit reversal id', function (): void {
    expect($this->fake->stripeTreasuryCreditReversalId())->toStartWith('credrev_')->toHaveLength(32)->toBeString();
});

it('generates a treasury debit reversal id', function (): void {
    expect($this->fake->stripeTreasuryDebitReversalId())->toStartWith('debrev_')->toHaveLength(31)->toBeString();
});

it('generates a money management financial address id', function (): void {
    expect($this->fake->stripeMoneyManagementFinancialAddressId())->toStartWith('finaddr_')->toHaveLength(52)->toBeString();
});

it('generates a money management adjustment id', function (): void {
    expect($this->fake->stripeMoneyManagementAdjustmentId())->toStartWith('adj_')->toHaveLength(50)->toBeString();
});

it('generates a money management outbound payment quote id', function (): void {
    expect($this->fake->stripeMoneyManagementOutboundPaymentQuoteId())->toStartWith('obpq_')->toHaveLength(51)->toBeString();
});

it('generates a money management outbound setup intent id', function (): void {
    expect($this->fake->stripeMoneyManagementOutboundSetupIntentId())->toStartWith('osi_')->toHaveLength(48)->toBeString();
});

it('generates a money management inbound transfer history entry id', function (): void {
    expect($this->fake->stripeMoneyManagementInboundTransferHistoryEntryId())->toStartWith('ibthe_')->toHaveLength(50)->toBeString();
});

it('generates a money management french bank account payout method id', function (): void {
    expect($this->fake->stripeMoneyManagementFrenchBankAccountPayoutMethodId())->toStartWith('frba_')->toHaveLength(37)->toBeString();
});

it('generates a seller network business profile id', function (): void {
    expect($this->fake->stripeSellerNetworkBusinessProfileId())->toStartWith('snbp_')->toHaveLength(29)->toBeString();
});

it('generates a stripe balance debit agreement id', function (): void {
    expect($this->fake->stripeBalanceDebitAgreementId())->toStartWith('sbda_')->toHaveLength(29)->toBeString();
});

it('generates an entitlement feature id', function (): void {
    expect($this->fake->stripeEntitlementFeatureId())->toStartWith('feat_')->toHaveLength(37)->toBeString();
});

it('generates an entitlement product feature id', function (): void {
    expect($this->fake->stripeEntitlementProductFeatureId())->toStartWith('prodft_')->toHaveLength(21)->toBeString();
});

it('generates an entitlement active entitlement id', function (): void {
    expect($this->fake->stripeEntitlementActiveEntitlementId())->toStartWith('ent_')->toHaveLength(36)->toBeString();
});

it('generates a scheduled query run id', function (): void {
    expect($this->fake->stripeSigmaScheduledQueryRunId())->toStartWith('sqr_')->toHaveLength(28)->toBeString();
});

it('generates a sigma query id', function (): void {
    expect($this->fake->stripeSigmaQueryId())->toStartWith('qry_')->toHaveLength(28)->toBeString();
});

it('generates a reporting report run id', function (): void {
    expect($this->fake->stripeReportingReportRunId())->toStartWith('frr_')->toHaveLength(28)->toBeString();
});

it('generates a financial connection account id', function (): void {
    expect($this->fake->stripeFinancialConnectionAccountId())->toStartWith('fca_')->toHaveLength(28)->toBeString();
});

it('generates a financial connection account ownership id', function (): void {
    expect($this->fake->stripeFinancialConnectionAccountOwnershipId())->toStartWith('fcaowns_')->toHaveLength(32)->toBeString();
});

it('generates a financial connection account owner id', function (): void {
    expect($this->fake->stripeFinancialConnectionAccountOwnerId())->toStartWith('fcaown_')->toHaveLength(31)->toBeString();
});

it('generates a financial connection authorization id', function (): void {
    expect($this->fake->stripeFinancialConnectionAuthorizationId())->toStartWith('fcauth_')->toHaveLength(31)->toBeString();
});

it('generates a financial connection session id', function (): void {
    expect($this->fake->stripeFinancialConnectionSessionId())->toStartWith('fcsess_')->toHaveLength(31)->toBeString();
});

it('generates a financial connection transaction id', function (): void {
    expect($this->fake->stripeFinancialConnectionTransactionId())->toStartWith('fctxn_')->toHaveLength(30)->toBeString();
});

it('generates a financial connection transaction refresh id', function (): void {
    expect($this->fake->stripeFinancialConnectionTransactionRefreshId())->toStartWith('fctxnref_')->toHaveLength(33)->toBeString();
});

it('generates a tax calculation id', function (): void {
    expect($this->fake->stripeTaxCalculationId())->toStartWith('taxcalc_')->toHaveLength(32)->toBeString();
});

it('generates a tax location id', function (): void {
    expect($this->fake->stripeTaxLocationId())->toStartWith('taxloc_')->toHaveLength(31)->toBeString();
});

it('generates a tax association id', function (): void {
    expect($this->fake->stripeTaxAssociationId())->toStartWith('taxa_')->toHaveLength(29)->toBeString();
});

it('generates a tax registration id', function (): void {
    expect($this->fake->stripeTaxRegistrationId())->toStartWith('taxreg_')->toHaveLength(21)->toBeString();
});

it('generates a tax transaction id', function (): void {
    expect($this->fake->stripeTaxTransactionId())->toStartWith('tax_')->toHaveLength(28)->toBeString();
});

it('generates a tax transaction line item id', function (): void {
    expect($this->fake->stripeTaxTransactionLineItemId())->toStartWith('tax_li_')->toHaveLength(21)->toBeString();
});

it('generates a identity verification session id', function (): void {
    expect($this->fake->stripeIdentityVerificationSessionId())->toStartWith('vs_')->toHaveLength(27)->toBeString();
});

it('generates a identity verification report id', function (): void {
    expect($this->fake->stripeIdentityVerificationReportId())->toStartWith('vr_')->toHaveLength(27)->toBeString();
});

it('generates a crypto onramp session id', function (): void {
    expect($this->fake->stripeCryptoOnrampSessionId())->toStartWith('cos_')->toHaveLength(28)->toBeString();
});

it('generates a crypto onramp session client secret', function (): void {
    expect($this->fake->stripeCryptoOnrampSessionClientSecret())->toStartWith('cos_')->toContain('_secret_')->toHaveLength(71)->toBeString();
});

it('generates a crypto consumer wallet id', function (): void {
    expect($this->fake->stripeCryptoConsumerWalletId())->toStartWith('ccw_')->toHaveLength(28)->toBeString();
});

it('generates a crypto customer id', function (): void {
    expect($this->fake->stripeCryptoCustomerId())->toStartWith('crc_')->toHaveLength(28)->toBeString();
});

it('generates a crypto deposit address id', function (): void {
    expect($this->fake->stripeCryptoDepositAddressId())->toStartWith('cda_')->toHaveLength(28)->toBeString();
});

it('generates a climate order id', function (): void {
    expect($this->fake->stripeClimateOrderId())->toStartWith('climorder_')->toHaveLength(34)->toBeString();
});

it('generates a climate product id', function (): void {
    expect($this->fake->stripeClimateProductId())->toStartWith('climsku_')->toHaveLength(32)->toBeString();
});

it('generates a climate supplier id', function (): void {
    expect($this->fake->stripeClimateSupplierId())->toStartWith('climsup_')->toHaveLength(32)->toBeString();
});

it('generates a forwarding request id', function (): void {
    expect($this->fake->stripeForwardingRequestId())->toStartWith('fwd_req_')->toHaveLength(13)->toBeString();
});

it('generates a privacy redaction job id', function (): void {
    expect($this->fake->stripePrivacyRedactionJobId())->toStartWith('prj_')->toHaveLength(7)->toBeString();
});

it('generates a privacy redaction job validation error id', function (): void {
    expect($this->fake->stripePrivacyRedactionJobValidationErrorId())->toStartWith('prjve_')->toHaveLength(9)->toBeString();
});

it('generates an iam activity log id', function (): void {
    expect($this->fake->stripeIamActivityLogId())->toStartWith('accact_')->toHaveLength(31)->toBeString();
});

it('generates an apps app id', function (): void {
    expect($this->fake->stripeAppsAppId())->toStartWith('app_')->toHaveLength(36)->toBeString();
});

it('generates an apps install id', function (): void {
    expect($this->fake->stripeAppsInstallId())->toStartWith('appinst_')->toHaveLength(40)->toBeString();
});

it('generates a webhook endpoint id', function (): void {
    expect($this->fake->stripeWebhookEndpointId())->toStartWith('we_')->toHaveLength(27)->toBeString();
});

it('generates a webhook application id', function (): void {
    expect($this->fake->stripeWebhookApplicationId())->toStartWith('ca_')->toHaveLength(35)->toBeString();
});

it('generates a legacy source id', function (): void {
    expect($this->fake->stripeBillingSourceId())->toStartWith('src_')->toHaveLength(28)->toBeString();
});

it('generates a health alert id', function (): void {
    expect($this->fake->stripeHealthAlertId())->toStartWith('healt_')->toHaveLength(30)->toBeString();
});

it('generates a cxt id', function (): void {
    expect($this->fake->stripeCxtId())->toStartWith('cxt_')->toHaveLength(28)->toBeString();
});

it('generates an intd id', function (): void {
    expect($this->fake->stripeIntdId())->toStartWith('intd_')->toHaveLength(29)->toBeString();
});

it('generates an api mk key id', function (): void {
    expect($this->fake->stripeApiMkKeyId())->toStartWith('mk_')->toHaveLength(27)->toBeString();
});

it('generates a restricted live api key id', function (): void {
    expect($this->fake->stripeRestrictedLiveApiKeyId())->toStartWith('rk_live_')->toHaveLength(32)->toBeString();
});
