<?php

// define("GREETING", "Welcome to W3Schools.com!");

// defined('GREETING');

// echo defined("GREETING") ;

const father_of_modern_computer = 'Alan Turing';


echo father_of_modern_computer . PHP_EOL;

if(true) {
    define('PAYMENT_STATUS','PAID');
}

echo PAYMENT_STATUS;


// Define constant dynamically

$payment_status = 'PAID';
$constName = 'PLATFORM_' . $payment_status;
define($constName, $payment_status);

echo constant($constName);


// Magic Constants 

echo PHP_VERSION;

$foo = 'bar';
$$foo = 'baz';

echo $foo, $bar;
echo "$foo, ${$foo}";// depricated. 









echo "\n";