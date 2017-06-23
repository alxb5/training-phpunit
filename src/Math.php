<?php
/**
 * Created by PhpStorm.
 * User: fsalles
 * Date: 22/06/17
 * Time: 17:48
 */

namespace Training\PHPUnit;

class Math
{
    /** @var float */
    protected $number;

    const SCALE = 10;

    /**
     * Math constructor.
     **/
    public function __construct(float $number = 0.0)
    {
        $this->number = $number;
    }

    public function sum(float $number)
    {
        $this->number = (float) bcadd((string) $this->number, (string) $number, self::SCALE);

        return $this;
    }

    public function substract(float $number)
    {
        $this->number = (float) bcsub((string) $this->number, (string) $number, self::SCALE);

        return $this;
    }

    public function getNumber() : float
    {
        return $this->number;
    }

    public function divide(float $number)
    {
        $this->number = (float) bcdiv((string) $this->number, (string) $number, self::SCALE);

        return $this;
    }

    public function multiply(float $number)
    {
        $this->number = (float) bcmul((string) $this->number, (string) $number, self::SCALE);
    }
}