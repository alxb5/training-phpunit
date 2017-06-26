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
    
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function getProductCartPrices() : float
    {
        $price = new Math();

        foreach ($this->products as $product) {
            $price->sum($product->getPrice());
        }

        return $price->getNumber();
    }
}
