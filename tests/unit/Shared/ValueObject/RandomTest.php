<?php declare(strict_types=1);

namespace Tests\Unit\Shared\ValueObject;

use App\Shared\ValueObject\Random;
use PHPUnit\Framework\TestCase;

class RandomTest extends TestCase
{
    public function testInvalidEmail(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Participants must be 16 or over');
        Random::fromAge(1);
    }
}
