<?php

namespace Pbrilius\GetloanLocalhost\Tests\Entity;

use PHPUnit\Framework\TestCase;
use Pbrilius\GetloanLocalhost\Entity\User;

class UserTest extends TestCase
{
  public function testAccountability(): void
  {
    $user = new User();
    $this->assertIsObject($user);
  }

  public function testObjectivity(): void
  {
    $user = new User();
    $this->assertInstanceOf(User::class, $user);
  }
}
