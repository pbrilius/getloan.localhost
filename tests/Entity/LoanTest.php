<?php

namespace Pbrilius\GetloanLocalhost\Tests\Entity;

use PHPUnit\Framework\TestCase;
use Pbrilius\GetloanLocalhost\Entity\Loan;

class LoanTest extends TestCase
{
  public function testAccountability(): void
  {
    $loan = new Loan();
    $this->assertIsObject($loan);
  }

  public function testObjectivity(): void
  {
    $loan = new Loan();
    $this->assertInstanceOf(Loan::class, $loan);
  }
}
