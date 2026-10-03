# Upgrading

## From v5 to v6

These existing methods now generate Stripe's current prefixes:

| Method | Previous prefix | Current prefix |
|--------|-----------------|----------------|
| `stripeCoreDisputeId()` | `dp_` | `du_` |
| `stripeForwardingRequestId()` | `fwd_req_` | `fwdreq_` |
| `stripeBillingPlanId()` | `price_` | `plan_` |
| `stripeBillingCreditNoteLineItemId()` | `il_` | `cnli_` |

`stripeProductPriceId()` still generates `price_`. Invoice line items still generate `il_tmp_`.
