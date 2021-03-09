<?php declare(strict_types=1);

namespace App\Shared\ValueObject;

class Random
{
    private int $age;

    private function __construct(int $age)
    {
        if ($age < 16) {
            throw new \InvalidArgumentException('Participants must be 16 or over');
        }

        $this->age = $age;
    }

    public static function fromAge(int $age): self
    {
        return new self($age);
    }
}
