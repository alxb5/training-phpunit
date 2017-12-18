<?php
/**
 * Created by PhpStorm.
 * User: fsalles
 * Date: 23/06/17
 * Time: 14:43
 */

namespace Training\PHPUnit;

class Cart
{
    /** @var  Product[] */
    private $products;

    /** @var Math */
    private $math;
    
    public function __construct(Math $math, array $products)
    {
        $this->math = $math;
        $this->products = $products;
    }

    public function getProductCartPrices() : float
    {
        $price = 0;

        foreach ($this->products as $product) {
            $price = $this->math->sum($price, $product->getPrice());
        }

        return $price;
    }
}
