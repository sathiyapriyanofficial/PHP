<?php

// declare(strict_types=1);


require_once '../Transaction.php';


// $transaction = new Transaction(100, 'NI Income Range');

// $transaction->addTax(8);
// $transaction->discount(10);

// Chain methods 

// $amount = (new Transaction(100, 'NI Income Range'))
//   ->addTax(8)
//   ->discount(10)
//   ->getAmount();

// $class = 'Transaction';

// $amount = (new $class(100, 'NI Income Range'))
//   ->addTax(8)
//   ->discount(10)
//   ->getAmount();

// $amount1 = (new $class(200, 'NI Income Range'))
//   ->addTax(8)
//   ->discount(10)
//   ->getAmount();


// var_dump($amount);
// var_dump($amount1);

// std class 

$str = '{"a":1, "b":2, "c":3}';

$arr = json_decode($str);

echo '<pre>';
var_dump($arr);

// Custom Object. 

$newObjectCustomClass = new \stdClass();

$newObjectCustomClass->a = 1;

var_dump($newObjectCustomClass);

// Object Casting 

$arr = [1, 2, 4];

$obj = (object) $arr;

var_dump($obj);
