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
    /**
     * @dataProvider sumProvider
     */
    public function testSumNumber(float $firstNum, float $secondNum, float $result)
    {
        $math = new Math();
        $this->assertSame($result, $math->sum($firstNum, $secondNum));
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
        $math = new Math();
        $this->assertSame((float) 1, $math->substract(2, 1));
    }

    public function testDivideNumber()
    {
        $math = new Math();
        $this->assertSame((float) 3, $math->divide(6, 2));
    }

    public function testMultiplyNumber()
    {
        $math = new Math();
        $this->assertSame((float) 20, $math->multiply(5, 4));
    }

    public function testProductCartPriceWithFloatingPrecision()
    {
        $math = new Math();
        $this->assertSame((float) 100, $math->sum(9.8, $math->sum(80.1, 10.1)));
    }
}
