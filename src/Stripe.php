<?php

namespace Faker\Provider;

class Stripe extends Base
{
    private function generateRandomString($length = 24, $numericOnly = false): string
    {
        if ($numericOnly) {
            $characters = '0123456789';
        } else {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }

        $string = '';
        $max = strlen($characters) - 1;

        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, $max)];
        }

        return $string;
    }

    public function stripeConnectAccountId(): string
    {
        return 'acct_' . $this->generateRandomString(16);
    }

    public function stripeConnectApplicationFeeId(): string
    {
        return 'fee_' . $this->generateRandomString();
    }

    public function stripeCoreBalanceTransactionId(): string
    {
        return 'txn_' . $this->generateRandomString(25);
    }

    public function stripeCoreChargeId(): string
    {
        return 'ch_' . $this->generateRandomString();
    }

    public function stripeCoreCustomerId(): string
    {
        return 'cus_' . $this->generateRandomString(14);
    }

    public function stripeCoreDisputeId(): string
    {
        return 'dp_' . $this->generateRandomString();
    }

    public function stripeCoreEventId(): string
    {
        return 'evt_' . $this->generateRandomString();
    }

    public function stripeCoreFileId(): string
    {
        return 'file_' . $this->generateRandomString();
    }

    public function stripeCoreFileLinkId(): string
    {
        return 'link_' . $this->generateRandomString();
    }

    public function stripeBillingInvoiceId(): string
    {
        return 'in_' . $this->generateRandomString();
    }

    public function stripeBillingInvoiceItemId(): string
    {
        return 'ii_' . $this->generateRandomString();
    }

    public function stripeCoreMandateId(): string
    {
        return 'mandate_' . $this->generateRandomString();
    }

    public function stripeCorePaymentIntentId(): string
    {
        return 'pi_' . $this->generateRandomString();
    }

    public function stripeCorePayoutId(): string
    {
        return 'po_' . $this->generateRandomString();
    }

    public function stripeCoreRefundId(): string
    {
        return 're_' . $this->generateRandomString();
    }

    public function stripeCoreSetupIntentId(): string
    {
        return 'seti_' . $this->generateRandomString();
    }

    public function stripeCoreSetupAttemptId(): string
    {
        return 'setatt_' . $this->generateRandomString();
    }

    public function stripeCoreTokenId(): string
    {
        return 'tok_' . $this->generateRandomString();
    }

    public function stripePaymentMethodId(): string
    {
        return 'pm_' . $this->generateRandomString();
    }

    public function stripePaymentMethodBankAccountId(): string
    {
        return 'ba_' . $this->generateRandomString();
    }

    public function stripePaymentMethodCardId(): string
    {
        return 'card_' . $this->generateRandomString();
    }

    public function stripeProductId(): string
    {
        return 'prod_' . $this->generateRandomString(14);
    }

    public function stripeProductPriceId(): string
    {
        return 'price_' . $this->generateRandomString();
    }

    public function stripeProductPromotionCodeId(): string
    {
        return 'promo_' . $this->generateRandomString();
    }

    public function stripeProductDiscountId(): string
    {
        return 'di_' . $this->generateRandomString();
    }

    public function stripeProductTaxCodeId(): string
    {
        return 'txcd_' . $this->generateRandomString(8, true);
    }

    public function stripeProductTaxRateId(): string
    {
        return 'txr_' . $this->generateRandomString();
    }

    public function stripeProductShippingRateId(): string
    {
        return 'shr_' . $this->generateRandomString();
    }

    public function stripeCheckoutSessionId(): string
    {
        return 'cs_' . $this->generateRandomString(58);
    }

    public function stripePaymentLinkId(): string
    {
        return 'plink_' . $this->generateRandomString();
    }

    public function stripeBillingCreditNoteId(): string
    {
        return 'cn_' . $this->generateRandomString();
    }

    public function stripeBillingCustomerBalanceTransactionId(): string
    {
        return 'cbtxn_' . $this->generateRandomString();
    }

    public function stripeBillingCustomerPortalId(): string
    {
        return 'bps_' . $this->generateRandomString();
    }

    public function stripeBillingCustomerTaxIdId(): string
    {
        return 'txi_' . $this->generateRandomString();
    }

    public function stripeBillingPlanId(): string
    {
        return 'price_' . $this->generateRandomString();
    }

    public function stripeBillingQuoteId(): string
    {
        return 'qt_' . $this->generateRandomString();
    }

    public function stripeBillingSubscriptionId(): string
    {
        return 'sub_' . $this->generateRandomString();
    }

    public function stripeBillingSubscriptionItemId(): string
    {
        return 'si_' . $this->generateRandomString(14);
    }

    public function stripeBillingSubscriptionScheduleId(): string
    {
        return 'sub_sched_' . $this->generateRandomString();
    }

    public function stripeBillingTestClockId(): string
    {
        return 'clock_' . $this->generateRandomString();
    }
    public function stripeBillingUsageRecordId(): string
    {
        return 'mbur_' . $this->generateRandomString();
    }

    public function stripeConnectApplicationFeeRefundId(): string
    {
        return 'fr_' . $this->generateRandomString();
    }

    public function stripeConnectExternalAccountId(): string
    {
        return 'ba_' . $this->generateRandomString();
    }

    public function stripeConnectPersonId(): string
    {
        return 'person_' . $this->generateRandomString();
    }

    public function stripeConnectTopUpId(): string
    {
        return 'tu_' . $this->generateRandomString();
    }

    public function stripeConnectTransferId(): string
    {
        return 'tr_' . $this->generateRandomString();
    }

    public function stripeConnectTransferReversalId(): string
    {
        return 'trr_' . $this->generateRandomString();
    }

    public function stripeConnectSecretManagementId(): string
    {
        return 'appsecret_' . $this->generateRandomString();
    }

    public function stripeFraudEarlyFraudWarningId(): string
    {
        return 'issfr_' . $this->generateRandomString();
    }

    public function stripeFraudReviewId(): string
    {
        return 'prv_' . $this->generateRandomString();
    }

    public function stripeFraudValueListId(): string
    {
        return 'rsl_' . $this->generateRandomString();
    }

    public function stripeFraudValueListItemId(): string
    {
        return 'rsli_' . $this->generateRandomString();
    }

    public function stripeIssuingAuthorizationId(): string
    {
        return 'iauth_' . $this->generateRandomString();
    }

    public function stripeIssuingCardholderId(): string
    {
        return 'ich_' . $this->generateRandomString();
    }

    public function stripeIssuingCardId(): string
    {
        return 'ic_' . $this->generateRandomString();
    }

    public function stripeIssuingDisputeId(): string
    {
        return 'idp_' . $this->generateRandomString();
    }

    public function stripeIssuingTransactionId(): string
    {
        return 'ipi_' . $this->generateRandomString();
    }

    public function stripeTerminalLocationId(): string
    {
        return 'tml_' . $this->generateRandomString();
    }

    public function stripeTerminalReaderId(): string
    {
        return 'tmr_' . $this->generateRandomString();
    }

    public function stripeTerminalHardwareOrderId(): string
    {
        return 'thor_' . $this->generateRandomString();
    }

    public function stripeTerminalHardwareProductId(): string
    {
        return 'thpr_' . $this->generateRandomString(14);
    }

    public function stripeTerminalHardwareSkuId(): string
    {
        return 'thsku_' . $this->generateRandomString(14);
    }

    public function stripeTerminalHardwareShippingMethodId(): string
    {
        return 'thsm_' . $this->generateRandomString(14);
    }

    public function stripeTerminalConfigurationId(): string
    {
        return 'tmc_' . $this->generateRandomString(14);
    }

    public function stripeTreasuryFinancialAccountId(): string
    {
        return 'fa_' . $this->generateRandomString();
    }

    public function stripeTreasuryTransactionId(): string
    {
        return 'trxn_' . $this->generateRandomString();
    }

    public function stripeTreasuryTransactionEntryId(): string
    {
        return 'trxne_' . $this->generateRandomString();
    }

    public function stripeTreasuryOutboundTransferId(): string
    {
        return 'obt_' . $this->generateRandomString();
    }

    public function stripeTreasuryOutboundPaymentId(): string
    {
        return 'obp_' . $this->generateRandomString();
    }

    public function stripeTreasuryInboundTransferId(): string
    {
        return 'ibt_' . $this->generateRandomString();
    }

    public function stripeTreasuryReceivedCreditId(): string
    {
        return 'rc_' . $this->generateRandomString();
    }

    public function stripeTreasuryReceivedDebitId(): string
    {
        return 'rd_' . $this->generateRandomString();
    }

    public function stripeTreasuryCreditReversalId(): string
    {
        return 'credrev_' . $this->generateRandomString();
    }

    public function stripeTreasuryDebitReversalId(): string
    {
        return 'debrev_' . $this->generateRandomString();
    }

    public function stripeSigmaScheduledQueryRunId(): string
    {
        return 'sqr_' . $this->generateRandomString();
    }

    public function stripeReportingReportRunId(): string
    {
        return 'frr_' . $this->generateRandomString();
    }

    public function stripeFinancialConnectionAccountId(): string
    {
        return 'fca_' . $this->generateRandomString();
    }

    public function stripeFinancialConnectionsAccountOwnershipId(): string
    {
        return 'fcaowns_' . $this->generateRandomString();
    }

    public function stripeFinancialConnectionsSessionId(): string
    {
        return 'fcsess_' . $this->generateRandomString();
    }

    public function stripeFinancialConnectionTransactionId(): string
    {
        return 'fctxn_' . $this->generateRandomString();
    }

    public function stripeTaxCalculationId(): string
    {
        return 'taxcalc_' . $this->generateRandomString();
    }

    public function stripeTaxTransactionId(): string
    {
        return 'tax_' . $this->generateRandomString();
    }

    public function stripeIdentityVerificationSessionId(): string
    {
        return 'vs_' . $this->generateRandomString();
    }

    public function stripeIdentityVerificationReportId(): string
    {
        return 'vr_' . $this->generateRandomString();
    }

    public function stripeWebhookEndpointId(): string
    {
        return 'we_' . $this->generateRandomString();
    }

    public function stripeFinancialConnectionTransactionRefreshId(): string
    {
        return 'fctxnref_' . $this->generateRandomString();
    }

    public function stripeTaxTransactionLineItemId(): string
    {
        return 'tax_li_' . $this->generateRandomString(14);
    }

    public function stripeWebhookApplicationId(): string
    {
        return 'ca_' . $this->generateRandomString(32);
    }

    public function stripeCryptoOnrampSessionId(): string
    {
        return 'cos_' . $this->generateRandomString();
    }
}