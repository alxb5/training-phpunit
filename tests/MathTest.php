<?php
/**
 * Created by PhpStorm.
 * User: fsalles
 * Date: 22/06/17
 * Time: 17:52
 */

namespace Training\PHPUnit;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testEmptyNumber()
    {
        $math = new Math();
        $this->assertSame((float) 0, $math->getNumber());
    }

    /**
     * @dataProvider sumProvider
     */
    public function testSumNumber(float $firstNum, float $secondNum, float $result)
    {
        $math = new Math($firstNum);
        $math->sum($secondNum);
        $this->assertSame($result, $math->getNumber());
    }

    public function sumProvider()
    {
        return [
            [1, 2, 3],
            [2.50, 4.50, 7],
            [10.88, 20.12, 31]
        ];
    }

    public function testSubstractNumber()
    {
        $math = new Math(2);
        $math->substract(1);
        $this->assertSame((float) 1, $math->getNumber());
    }

    public function testDivideNumber()
    {
        $math = new Math(6);
        $math->divide(2);
        $this->assertSame((float) 3, $math->getNumber());
    }

    public function testMultiplyNumber()
    {
        $math = new Math(5);
        $math->multiply(4);
        $this->assertSame((float) 20, $math->getNumber());
    }

    public function testProductCartPriceWithFloatingPrecision()
    {
        $math = new Math(80.1);
        $math->sum(10.1);
        $math->sum(9.8);

        $this->assertSame((float) 100, $math->getNumber());
    }
}
