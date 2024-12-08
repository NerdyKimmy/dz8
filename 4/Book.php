<?php

require_once 'IPriceable.php';
require_once 'IDiscountable.php';

class Book implements IPriceable, IDiscountable
{
    private float $price;

    public function applyDiscount(string $discount): void
    {
        echo "Applying discount: $discount to the book <br>";
    }

    public function applyPromocode(string $promocode): void
    {
        echo "Applying promocode: $promocode to the book <br>";
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
        echo "Setting book price to $price.\n";
    }
}
