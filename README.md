![FakerPHP Stripe ID Provider Banner](assets/banner.png)

# FakerPHP Stripe ID Provider

## Introduction
This package allows FakerPHP to generate fake IDs which have the same structure you can expect to be returned from 
Stripe. The wonderful [Pest](https://pestphp.com/) is used to run tests contained within this package, which requires
a minimum PHP Version of 8.1. 

## Features
This package can currently generate fake IDs for the following Stripe resources:

- Accounts `stripeAccountId()`
- Balance Transactions `stripeBalanceTransactionId()`
- Charges `stripeChargeId()`
- Customers `stripeCustomerId()`
- Fees `stripeFeeId()`
- Invoices `stripeInvoiceId()`
- Invoice Items `stripeInvoiceItemId()`

## Usage / Examples
### Pest
```php
beforeEach(function () {
    $this->fake = fake();
    $this->fake->addProvider(new Stripe($this->fake));
});

it('shows an example', function () {
    $this->fake->stripeAccountId() // acct_xBXg7yyrSyQVbsjM
});
```

### PHPUnit
```php

private Generator $faker;

protected function setUp(): void
{
    $faker = Factory::create();
    $faker->addProvider(new Stripe($faker));

    $this->faker = $faker;
}

public function testShowExample()
{
    $this->faker->stripeAccountId() // acct_xBXg7yyrSyQVbsjM
}
```

### Laravel Factories
```php
public function definition(): array
{
    $faker = Factory::create();
    $faker->addProvider(new Stripe($faker));
    
    $faker->stripeAccountId() // acct_xBXg7yyrSyQVbsjM
}
```

## Contributing

_Coming Soon_
