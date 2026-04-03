<?php

declare(strict_types=1);

/*
Constructor Promotion 
- it a syntax used introduced in new php8.4
- it is a shorthand version. 
- you can type hint anything but expect callable. 
- cannot have duplicate promoted property and property. 
- can setup default value. 
- can have nullable type. 

*/
class Transaction
{

  // public float $amount;
  // public string $description;

  // public function __construct(
  //   float $amount,
  //   string $description
  // ) {
  //   $this->amount = $amount;
  //   $this->description = $description;
  // }

  public ?Customer $customer = null;

  public function __construct(
    public float $amount,
    public string $description
  ) {}
}
