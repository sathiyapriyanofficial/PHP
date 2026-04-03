<?php

// declare(strict_types=1);


require_once '../Transaction.php';
require_once '../Customer.php';
require_once '../PaymentProfile.php';

$transaction = new Transaction(5, 'test');

echo $transaction?->customer?->paymentProfile->id;
