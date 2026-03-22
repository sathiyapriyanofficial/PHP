<?php

declare(strict_types=1);

class Transaction
{
  private float $amount;
  private string $description;

  public function __construct(float $amount, string $description)
  {
    $this->amount = $amount;
    $this->description = $description;
  }

  public function addTax(float $rate): Transaction
  {
    $this->amount += ($this->amount * $rate / 100);

    return $this;
  }

  public function discount(float $rate): Transaction
  {
    $this->amount -= ($this->amount * $rate / 100);
    return $this;
  }

  public function getAmount(): float
  {
    return $this->amount;
  }

  public function __destruct()
  {
    throw new \Exception('Not implemented');
  }
}
