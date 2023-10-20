![FakerPHP Stripe ID Provider Banner](assets/banner.png)

# FakerPHP Stripe ID Provider

![GitHub Workflow Status](https://img.shields.io/github/actions/workflow/status/jonpurvis/faker-stripe/ci.yml)
![GitHub last commit](https://img.shields.io/github/last-commit/jonpurvis/faker-stripe)
![Packagist PHP Version](https://img.shields.io/packagist/dependency-v/jonpurvis/faker-stripe/php)
![GitHub issues](https://img.shields.io/github/issues/jonpurvis/faker-stripe)
![GitHub](https://img.shields.io/github/license/jonpurvis/faker-stripe)
![Packagist Downloads](https://img.shields.io/packagist/dt/jonpurvis/faker-stripe)

## 👋 Introduction
This package allows FakerPHP to generate fake IDs which have the same structure you can expect to be returned from 
Stripe. The wonderful [Pest](https://pestphp.com/) is used to run tests contained within this package, which requires
a minimum PHP Version of 8.1. 

## ✨Features
This package can currently generate fake IDs for the following Stripe resources. To avoid any confusion,
the names of resources _should_ match what's in this package.

### Core Resources

| API Resource                                                             | Method                                  | Example                                                        |
|--------------------------------------------------------------------------|-----------------------------------------|----------------------------------------------------------------|
| [Balance Transactions](https://stripe.com/docs/api/balance_transactions) | `stripeCoreBalanceTransactionId()`      | `txn_na40ulkbDvvegzALfY8w61udH`                                |
| [Charges](https://stripe.com/docs/api/charges)                           | `stripeCoreChargeId()`                  | `ch_Dxy18EPyj6XXvqQiqApPQ8dA`                                  |
| [Customers](https://stripe.com/docs/api/customers)                       | `stripeCoreCustomerId()`                | `cus_uW8qUwsTwKKtY3`                                           |
| [Disputes](https://stripe.com/docs/api/disputes)                         | `stripeCoreDisputeId()`                 | `dp_e3ZeEytdlpOxMtRg9M88RMcq`                                  |
| [Events](https://stripe.com/docs/api/events)                             | `stripeCoreEventId()`                   | `evt_diyd59RDTVw8ZxrnkOt62mFS`                                 |
| [Files](https://stripe.com/docs/api/files)                               | `stripeCoreFileId()`                    | `file_qrbRTo7XbytwvE6w3SQU8QXK`                                |
| [File Links](https://stripe.com/docs/api/file_links)                     | `stripeCoreFileLinkId()`                | `link_Z5Tesn6zQYYdov5R3bCblM8A`                                | 
| [Mandates](https://stripe.com/docs/api/mandates)                         | `stripeCoreMandateId()`                 | `mandate_S4EbkGH8MFAOWUXivQqcV7wx`                             |
| [PaymentIntents](https://stripe.com/docs/api/payment_intents)            | `stripeCorePaymentIntentId()`           | `pi_KiAjc3WFzvswIhq8IkCLXNBW`                                  |
| [PaymentIntents](https://stripe.com/docs/api/payment_intents)            | `stripeCorePaymentIntentClientSecret()` | `pi_rZh1PKbBkmMFkHve9GKRKyg4_secret_dr3lRVfoKD8ew3BUmYZYuVONV` |
| [SetupAttempts](https://stripe.com/docs/api/setup_attempts)              | `stripeCoreSetupAttemptId()`            | `setatt_JBHfYghz8HiScAnOcOKin75X`                              |
| [SetupIntents](https://stripe.com/docs/api/setup_intents)                | `stripeCoreSetupIntentId()`             | `seti_yeYZcpT970pn6sBXlAkj8AbK`                                |
| [Payouts](https://stripe.com/docs/api/payouts)                           | `stripeCorePayoutId()`                  | `po_YqFWOxztWRuLCJezThbHktTP`                                  |
| [Refunds](https://stripe.com/docs/api/refunds)                           | `stripeCoreRefundId()`                  | `re_3BebPOs89OAgEtXAOG0c1eF4`                                  |
| [Tokens](https://stripe.com/docs/api/tokens)                             | `stripeCoreTokenId()`                   | `tok_q1KiYddcC48Tqney3T8Vnkzu`                                 |

### Payment Methods
| API Resource                                                                 | Method                               | Example                            |
|------------------------------------------------------------------------------|--------------------------------------|------------------------------------|
| [Payment Methods](https://stripe.com/docs/api/payment_methods)               | `stripePaymentMethodId()`            | `pm_jkztRiUi5yqTNqHJTzTAVolI`      |
| [Payment Method Configurations](https://stripe.com/docs/api/payment_method_configurations) | `stripePaymentMethodConfigurationId()`            | `pmc_BS6va641BwHZCexJscZ9LNH8`      |
| [Payment Method Domains](https://stripe.com/docs/api/payment_method_domains)        | `stripePaymentMethodDomainId()`            | `pmd_FcObWHJ3gtwujiuUhVhWSe2c`      |
| [Bank Accounts](https://stripe.com/docs/api/customer_bank_accounts)          | `stripePaymentMethodBankAccountId()` | `ba_gkcmh6gu31nALx6PJDJckqPn`      |
| [Cash Balance](https://stripe.com/docs/api/cash_balance)                     | `stripeCashBalanceTransactionId()`   | `ccsbtxn_6sKoup9yicpuPC7MykObBsjq` |
| [Cards](https://stripe.com/docs/api/cards)                                   | `stripePaymentMethodCardId()`        | `card_A56nkfbrHtdQ7bv8I9eeQOtW`    |

### Products
| API Resource                                                   | Method                           | Example                          |
|----------------------------------------------------------------|----------------------------------|----------------------------------|
| [Products](https://stripe.com/docs/api/products)               | `stripePaymentMethodId()`        | `pm_3ffsQykg0u0OlEEkHph2Uhvl`    |
| [Prices](https://stripe.com/docs/api/prices)                   | `stripeProductPriceId()`         | `price_YhlhAgy0lHbLcOWwFZ596x1S` |
| [Promotion Codes](https://stripe.com/docs/api/promotion_codes) | `stripeProductPromotionCodeId()` | `promo_7ADzsJ6WuQIsKsIj4T4MTeIX` |
| [Discounts](https://stripe.com/docs/api/discounts)             | `stripeProductDiscountId()`      | `di_DleWj1FqYhsriqRSaQr6jCgs`    |
| [Tax Codes](https://stripe.com/docs/api/tax_codes)             | `stripeProductTaxCodeId()`       | `txcd_90766505`                  |
| [Tax Rates](https://stripe.com/docs/api/tax_rates)             | `stripeProductTaxRateId()`       | `txr_nNePe3bTkOwlrAbsAxpXzWXy`   |
| [Shipping Rates](https://stripe.com/docs/api/shipping_rates)   | `stripeProductShippingRateId()`  | `shr_Sg2ZpoUCsfdAujoCc8U8MDba`   |

### Checkout
| API Resource                                                       | Method                      | Example                                                         |
|--------------------------------------------------------------------|-----------------------------|-----------------------------------------------------------------|
| [Checkout Sessions](https://stripe.com/docs/api/checkout/sessions) | `stripeCheckoutSessionId()` | `cs_A1caKuWyEPOrovEkpYJLfId5uOpWzynW8ZunRYnA0J9RsPzdM6YeBfDG03` |

### Payment Links
| API Resource                                                             | Method                  | Example                          |
|--------------------------------------------------------------------------|-------------------------|----------------------------------|
| [Payment Links](https://stripe.com/docs/api/payment_links/payment_links) | `stripePaymentLinkId()` | `plink_L85n1vZMv4QS0aYwj11TKjTy` |

### Billing
| API Resource                                                                               | Method                                        | Example                              |
|--------------------------------------------------------------------------------------------|-----------------------------------------------|--------------------------------------|
| [Credit Notes](https://stripe.com/docs/api/credit_notes)                                   | `stripeBillingCreditNoteId()`                 | `cn_37b9KW8lODWCDSilck1hs0on`        |
| [Customer Balance Transactions](https://stripe.com/docs/api/customer_balance_transactions) | `stripeBillingCustomerBalanceTransactionId()` | `cbtxn_SboO9vmMCUoTg6iGGdsOQ18R`     |
| [Customer Portal](https://stripe.com/docs/api/customer_portal)                             | `stripeBillingCustomerPortalId()`             | `bps_HFXl8fnSxXjVUvepP0g7cfEH`       |
| [Customer Tax IDs](https://stripe.com/docs/api/customer_tax_ids)                           | `stripeBillingCustomerTaxIdId()`              | `txi_Vs7BSOcldH5QIN35U8lSlJuc`       |
| [Invoices](https://stripe.com/docs/api/invoices)                                           | `stripeBillingInvoiceId()`                    | `in_pBNUeaVUmJ8I44Fx1OajNLQn`        |
| [Invoice Items](https://stripe.com/docs/api/invoiceitems)                                  | `stripeBillingInvoiceItemId()`                | `ii_gOWpZpoGoMOE5IYVS86mmGXS`        |
| [Plans](https://stripe.com/docs/api/plans)                                                 | `stripeBillingPlanId()`                       | `price_9wWZ7dtmQSWvQDhFBJB49sv8`     |
| [Quotes](https://stripe.com/docs/api/quotes)                                               | `stripeBillingQuoteId()`                      | `qt_qrx3tn3rnQ1USENFK1gJcXLv`        |
| [Subscriptions](https://stripe.com/docs/api/subscriptions)                                 | `stripeBillingSubscriptionId()`               | `sub_wMwsJiaZpdRfrF7WXkP0ibmc`       |
| [Subscription Items](https://stripe.com/docs/api/subscription_items)                       | `stripeBillingSubscriptionItemId()`           | `si_3OdBLaD7p37H2A`                  |
| [Subscription Schedules](https://stripe.com/docs/api/subscription_schedules)               | `stripeBillingSubscriptionScheduleId()`       | `sub_sched_OnyC6GSR3kjse08ehVNsB5U0` |
| [Test Clocks](https://stripe.com/docs/api/test_clocks)                                     | `stripeBillingTestClockId()`                  | `clock_6QR6dCPpUhhBg81wmyFF4VtJ`     |
| [Usage Records](https://stripe.com/docs/api/usage_records)                                 | `stripeBillingUsageRecordId()`                | `mbur_ppVgDLt5HcG8zP48Grk7NZfP`      |

### Connect
| API Resource                                                         | Method                                  | Example                              |
|----------------------------------------------------------------------|-----------------------------------------|--------------------------------------|
| [Accounts](https://stripe.com/docs/api/accounts)                     | `stripeConnectAccountId()`              | `acct_l8cMrvSDcUT4qP2h`              |
| [Application Fees](https://stripe.com/docs/api/application_fees)     | `stripeConnectApplicationFeeId()`       | `fee_ITNGc4r7B4QMjtOjsLr1GA2U`       |
| [Application Fee Refunds](https://stripe.com/docs/api/fee_refunds)   | `stripeConnectApplicationFeeRefundId()` | `fr_XxY71TOJinzdNkmEQUVtlUGk`        |
| [Capabilities](https://stripe.com/docs/api/capabilities)             | `stripeConnectCapabilityId()`           | `acap_gettfmKTrHMdUQgppBj8BJ6F`      |
| [External Accounts](https://stripe.com/docs/api/external_accounts)   | `stripeConnectExternalAccountId()`      | `ba_j8048CaKvbk1ie7lfxyzXF19`        |
| [Persons](https://stripe.com/docs/api/persons)                       | `stripeConnectPersonId()`               | `person_cNquFb7JU2nVsfIlprJHqIc1`    |
| [Top-ups](https://stripe.com/docs/api/topups)                        | `stripeConnectTopUpId()`                | `tu_kdxjWmOqbz9J5rMdnibcnr37`        |
| [Transfers](https://stripe.com/docs/api/transfers)                   | `stripeConnectTransferId()`             | `tr_1gClurOotKNBjvk7ktS3JHxo`        |
| [Transfer Reversals](https://stripe.com/docs/api/transfer_reversals) | `stripeConnectTransferReversalId()`     | `trr_LWr56oP4aoPIjVeXGOiFOJ6f`       |
| [Secret Management](https://stripe.com/docs/api/secret_management)   | `stripeConnectSecretManagementId()`     | `appsecret_QjQnyoan5rtIYdHSokfut7VD` |

### Fraud
| API Resource                                                                  | Method                             | Example                          |
|-------------------------------------------------------------------------------|------------------------------------|----------------------------------|
| [Early Fraud Warning](https://stripe.com/docs/api/radar/early_fraud_warnings) | `stripeFraudEarlyFraudWarningId()` | `issfr_NDwczkwka50cAHRFVfnbQP30` |
| [Reviews](https://stripe.com/docs/api/radar/reviews)                          | `stripeFraudReviewId()`            | `prv_Zlx9K6ixTcigHUnOdpxqCjOO`   |
| [Value Lists](https://stripe.com/docs/api/radar/value_lists)                  | `stripeFraudValueListId()`         | `rsl_C8PVL4lNS75t4PWEscJUXEkm`   |
| [Value List Items](https://stripe.com/docs/api/radar/value_list_items)        | `stripeFraudValueListItemId()`     | `rsli_QQdPv6uWYm7nZUlX3g65TfGV`  |

### Issuing
| API Resource                                                         | Method                           | Example                          |
|----------------------------------------------------------------------|----------------------------------|----------------------------------|
| [Authorizations](https://stripe.com/docs/api/issuing/authorizations) | `stripeIssuingAuthorizationId()` | `iauth_GyuotdxkKEHCNNYHohzBBuBh` |
| [Cardholders](https://stripe.com/docs/api/issuing/cardholders)       | `stripeIssuingCardholderId()`    | `ich_EyqQ6EcYkhzgyrGEQSCY68EB`   |
| [Cards](https://stripe.com/docs/api/issuing/cards)                   | `stripeIssuingCardId()`          | `ic_IsXAmEVzInXUPtq4uttDZ2g2`    |
| [Disputes](https://stripe.com/docs/api/issuing/disputes)             | `stripeIssuingDisputeId()`       | `idp_lXR4WsU6fhdpErzWVNOr24Ux`   |
| [Tokens](https://stripe.com/docs/api/issuing/tokens)                 | `stripeIssuingTokenId()`   | `intok_HMkTW4FnWckzqqNGGFJP4I7E`   |
| [Transactions](https://stripe.com/docs/api/issuing/transactions)     | `stripeIssuingTransactionId()`   | `ipi_FqGAHy3JUvUsjWdqyaViRFm2`   |

### Terminal
| API Resource                                                                                | Method                                     | Example                         |
|---------------------------------------------------------------------------------------------|--------------------------------------------|---------------------------------|
| [Locations](https://stripe.com/docs/api/terminal/locations)                                 | `stripeTerminalLocationId()`               | `tml_UntmyAU2XPdrxOznzLeRFOue`  |
| [Readers](https://stripe.com/docs/api/terminal/readers)                                     | `stripeTerminalReaderId()`                 | `tmr_2j8WBisfMEwMBNtLJEJ7uLOe`  |
| [Hardware Orders](https://stripe.com/docs/api/terminal/hardware_orders)                     | `stripeTerminalHardwareOrderId()`          | `thor_BgOkryA2RaqfMCzMomo4VDQ5` |
| [Hardware Products](https://stripe.com/docs/api/terminal/hardware_products)                 | `stripeTerminalHardwareProductId()`        | `thpr_GgSNDKrG2YURmV`           |
| [Hardware SKUs](https://stripe.com/docs/api/terminal/hardware_skus)                         | `stripeTerminalHardwareSkuId()`            | `thsku_46eIJkxj8F6Dfb`          |
| [Hardware Shipping Methods](https://stripe.com/docs/api/terminal/hardware_shipping_methods) | `stripeTerminalHardwareShippingMethodId()` | `thsm_HJclEgx3fzfYd5`           |
| [Configurations](https://stripe.com/docs/api/terminal/configuration)                        | `stripeTerminalConfigurationId()`          | `tmc_L7yWqYiNsihDrn`            |

### Treasury
| API Resource                                                                   | Method                               | Example                            |
|--------------------------------------------------------------------------------|--------------------------------------|------------------------------------|
| [FinancialAccounts](https://stripe.com/docs/api/treasury/financial_accounts)   | `stripeTreasuryFinancialAccountId()` | `fa_SHiUjM3c13bPdvV81YlFYwQu`      |
| [Transactions](https://stripe.com/docs/api/treasury/transactions)              | `stripeTreasuryTransactionId()`      | `trxn_VCKBAZWMzRUul2KHkWZjHGRt`    |
| [TransactionEntries](https://stripe.com/docs/api/treasury/transaction_entries) | `stripeTreasuryTransactionEntryId()` | `trxne_xe1YTcpq1tmWUgzNABC8kT1S`   |
| [OutboundTransfers](https://stripe.com/docs/api/treasury/outbound_transfers)   | `stripeTreasuryOutboundTransferId()` | `obt_9f5fWmY0s8Rbbfi8AoeifoRC`     |
| [OutboundPayments](https://stripe.com/docs/api/treasury/outbound_payments)     | `stripeTreasuryOutboundPaymentId()`  | `obp_QOJPdQ7lbAybgALjh67lgbsA`     |
| [InboundTransfers](https://stripe.com/docs/api/treasury/inbound_transfers)     | `stripeTreasuryInboundTransferId()`  | `ibt_JE9DIuWCZ9bY9xGPeKYPkSI5`     |
| [ReceivedCredits](https://stripe.com/docs/api/treasury/received_credits)       | `stripeTreasuryReceivedCreditId()`   | `rc_46y23bSUUCoMmsdv7Zvx0zYr`      |
| [ReceivedDebits](https://stripe.com/docs/api/treasury/received_debits)         | `stripeTreasuryReceivedDebitId()`    | `rd_ylnZC0HqdHBWWouwFsQhE4GU`      |
| [CreditReversals](https://stripe.com/docs/api/treasury/credit_reversals)       | `stripeTreasuryCreditReversalId()`   | `credrev_awpfYT4hppBEmsz9KPgtOYDm` |
| [DebitReversals](https://stripe.com/docs/api/treasury/debit_reversals)         | `stripeTreasuryDebitReversalId()`    | `debrev_ykpt4Mi6yZAPrm8upq3yKI5r`  |

### Sigma
| API Resource                                                             | Method                             | Example                        |
|--------------------------------------------------------------------------|------------------------------------|--------------------------------|
| [Scheduled Queries](https://stripe.com/docs/api/sigma/scheduled_queries) | `stripeSigmaScheduledQueryRunId()` | `sqr_89Lp2zqyTtqJXSFuPn9zHIcZ` |

### Reporting
| API Resource                                                     | Method                         | Example                        |
|------------------------------------------------------------------|--------------------------------|--------------------------------|
| [Report Runs](https://stripe.com/docs/api/reporting/report_type) | `stripeReportingReportRunId()` | `frr_jJ9LNixW3dEQco0XTeX2zE1R` |

### Financial Connections
| API Resource                                                                                      | Method                                                | Example                             |
|---------------------------------------------------------------------------------------------------|-------------------------------------------------------|-------------------------------------|
| [Accounts](https://stripe.com/docs/api/financial_connections/accounts)                            | `stripeFinancialConnectionAccountId()`                | `fca_z3JzQ1OCkYved5uWOqh3b387`      |
| [Account Ownership](https://stripe.com/docs/api/financial_connections/ownership)                  | `stripeFinancialConnectionAccountOwnershipId()`       | `fcaowns_XwyWHMQFo9koh9U1TuOMW43D`  |
| [Sessions](https://stripe.com/docs/api/financial_connections/session)                             | `stripeFinancialConnectionSessionId()`                | `fcsess_ZnomHexUQ68qiad2GWqQsvsa`   |
| [Transactions](https://stripe.com/docs/api/financial_connections/transaction)                     | `stripeFinancialConnectionTransactionId()`            | `fctxn_yIcXfBzg3NSJRYHqIW5spz4v`    |
| [Transaction Refresh](https://stripe.com/docs/api/financial_connections/transaction)              | `stripeFinancialConnectionTransactionRefreshId()`     | `fctxnref_qjmwOP8D8hJlSBgSKqHsY0Bi` |

### Tax
| API Resource                                                                      | Method                             | Example                            |
|-----------------------------------------------------------------------------------|------------------------------------|------------------------------------|
| [Calculations](https://stripe.com/docs/api/tax/calculations)                      | `stripeTaxCalculationId()`         | `taxcalc_3tXT5aZ0nMqhD0sFe8VtY8tR` |
| [Transactions](https://stripe.com/docs/api/tax/transactions)                      | `stripeTaxTransactionId()`         | `tax_nnTCZZscXpM9xaJyyncMJOck`     |
| [Transaction Line Items](https://stripe.com/docs/api/tax/transactions/line_items) | `stripeTaxTransactionLineItemId()` | `tax_li_NSTCDtCYyvp5dT`            |

### Identity
| API Resource                                                                       | Method                                  | Example                       |
|------------------------------------------------------------------------------------|-----------------------------------------|-------------------------------|
| [VerificationSessions](https://stripe.com/docs/api/identity/verification_sessions) | `stripeIdentityVerificationSessionId()` | `vs_j8AvYT7Tbmjz26tASmjdcyNt` |
| [Transactions](https://stripe.com/docs/api/identity/verification_reports)          | `stripeIdentityVerificationReportId()`  | `vr_IwuD3wV5qfD4t4fbTOzWwUm6` |

### Crypto
| API Resource                                                          | Method                                    | Example                                                                   |
|-----------------------------------------------------------------------|-------------------------------------------|---------------------------------------------------------------------------|
| [Onramp Sessions](https://stripe.com/docs/api/crypto/onramp_sessions) | `stripeCryptoOnrampSessionId()`           | `cos_wlo5PYZC2j8lFHnMaxbuFBK8`                                            |
| [Onramp Sessions](https://stripe.com/docs/api/crypto/onramp_sessions) | `stripeCryptoOnrampSessionClientSecret()` | `cos_Wjo3OVUVusWY54RHF6oCM0Jm_secret_Bm9iRlLbb82K19mwOxQE9jVdA0U8rMEmKO6` |


### Webhooks
| API Resource                                                         | Method                         | Example                               |
|----------------------------------------------------------------------|--------------------------------|---------------------------------------|
| [Webhook Endpoints](https://stripe.com/docs/api/webhook_endpoints)   | `stripeWebhookEndpointId()`    | `we_irKQp8JwXgUxXFefCM6zlx1R`         |
| [Webhook Application](https://stripe.com/docs/api/webhook_endpoints) | `stripeWebhookApplicationId()` | `ca_Y5nYE1wwup9JPcXxQ9JaJWBRAJiFMujp` |

## 📚 Usage / Examples
### Pest
```php
it('generates a well structured stripe account id', function () {
   fake()->addProvider(new Stripe(fake()));
   
   expect(fake()->stripeConnectAccountId())->toStartWith('acct_')->toHaveLength(21)->toBeString();
});
```

### PHPUnit
```php
public function testGeneratesWellStructuredStripeAccountId()
{
    $faker = Factory::create();
    $faker->addProvider(new Stripe($faker));

    $this->assertStringStartsWith('acct_', $faker->stripeConnectAccountId());
}
```

### Laravel Factories
```php
use WithFaker;

public function definition(): array
{
    $this->faker->addProvider(new Stripe($this->faker));
    
    return [
        'id' => $this->faker->stripeConnectAccountId(),
        'name' => 'John Doe',
        'email' => 'john.doe@testing.co.uk'
    ];   
}
```