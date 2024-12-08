<?php

require_once 'IPriceable.php';
require_once 'IDiscountable.php';
require_once 'IColorable.php';
require_once 'ISizeable.php';

class Outerwear implements IPriceable, IDiscountable, IColorable, ISizeable
{
    private float $price;
    private string $color;
    private string $size;

    public function applyDiscount(string $discount): void
    {
        echo "Applying discount: $discount to the outerwear <br>";
    }

    public function applyPromocode(string $promocode): void
    {
        echo "Applying promocode: $promocode to the outerwear <br>";
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
        echo "Setting outerwear price to $price <br>";
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
        echo "Setting outerwear color to $color <br>";
    }

    public function setSize(string $size): void
    {
        $this->size = $size;
        echo "Setting outerwear size to $size.\n";
    }
}
