<?php

declare(strict_types=1);

namespace PaymentGateway\Stripe;

class Transaction
{
  public function __construct()
  {
    var_dump(\explode(',', 'HelloWorld'));
  }
}

function explode($separator, $str)
{
  return 'foo';
}
