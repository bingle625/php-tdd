<?php
namespace test;

use src\classes\Dollar;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

/**
 * Class Money
 * 5dollor + 10franc = 10dollar
 * 5dollar *2 = 10dollar
 */
class MoneyTest extends TestCase
{

    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        assertEquals(10,$five->amount);
    }
}