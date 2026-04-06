<?php

// declare(strict_types=1);


require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';

use PaymentGateway\Paddle\Transaction;

echo "<pre>";
var_dump(new Transaction());
echo "</pre>";
