![FakerPHP Stripe ID Provider Banner](assets/banner.png)

# FakerPHP Stripe ID Provider

![GitHub Workflow Status](https://img.shields.io/github/actions/workflow/status/jonpurvis/faker-stripe/ci.yml)
![GitHub last commit](https://img.shields.io/github/last-commit/jonpurvis/faker-stripe)
![Packagist PHP Version](https://img.shields.io/packagist/dependency-v/jonpurvis/faker-stripe/php)
![GitHub issues](https://img.shields.io/github/issues/jonpurvis/faker-stripe)
![GitHub](https://img.shields.io/github/license/jonpurvis/faker-stripe)

## 👋 Introduction
This package allows FakerPHP to generate fake IDs which have the same structure you can expect to be returned from 
Stripe. The wonderful [Pest](https://pestphp.com/) is used to run tests contained within this package, which requires
a minimum PHP Version of 8.1. 

## ✨ Features
This package can currently generate fake IDs for the following Stripe resources:

- Accounts `stripeAccountId()`
- Balance Transactions `stripeBalanceTransactionId()`
- Charges `stripeChargeId()`
- Customers `stripeCustomerId()`
- Fees `stripeFeeId()`
- Invoices `stripeInvoiceId()`
- Invoice Items `stripeInvoiceItemId()`

## 📚 Usage / Examples
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
use WithFaker;

public function definition(): array
{
    $this->faker->addProvider(new Stripe($this->faker));
    
    $this->faker->stripeAccountId() // acct_xBXg7yyrSyQVbsjM
}
```

## 🧩 Contributing

I originally built the package to suit the needs I had at the time, but the Stripe API is pretty big and has a lot of resources. If you need a resource adding, feel free to [Raise an Issue](https://github.com/JonPurvis/faker-stripe/issues) or Submit a PR! If you're doing the latter, please make sure that:

- The method you add into the `Stripe` class is in the correct place alphabetically.
- The method you add into the `Stripe` class has the correct number of characters when calling `generateRandomString()` (based on whatever Stripe returns).
- The method you add into the `Stripe` has a matching test in the `StripeTest` class that passes
