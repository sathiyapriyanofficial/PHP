<?php

// declare(strict_types=1);

// phpinfo();

require_once "./../Car.php";

$car = new Car("red");

// getter
echo $car->getColor();

// setter
$car->setColor("blue");

// speed
$car->calculateSpeed(100, 2);
echo $car->getSpeed();
