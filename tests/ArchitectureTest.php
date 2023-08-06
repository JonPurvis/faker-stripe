<?php

use Faker\Provider\Base;
use Faker\Provider\Stripe;

test('provider')
    ->expect(Stripe::class)
    ->toExtend(Base::class)
    ->toOnlyUse(Base::class);