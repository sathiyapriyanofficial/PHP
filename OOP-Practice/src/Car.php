<?php

declare(strict_types=1);

class Car
{
  private string $color;
  private ?float $speed = null;

  public function __construct(string $color)
  {
    $this->setColor($color); // use setter
  }

  // ✅ SETTER
  public function setColor(string $color): void
  {
    if (empty($color)) {
      throw new InvalidArgumentException("Color cannot be empty");
    }

    $this->color = $color;
  }

  // ✅ GETTER
  public function getColor(): string
  {
    return $this->color;
  }

  // Calculate speed
  public function calculateSpeed(float $distance, float $time): float
  {
    if ($time <= 0) {
      throw new InvalidArgumentException("Time must be greater than 0");
    }

    $this->speed = $distance / $time;
    return $this->speed;
  }

  // Getter for speed
  public function getSpeed(): ?float
  {
    return $this->speed;
  }
}
