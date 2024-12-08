<?php

interface IDiscountable
{
    public function applyDiscount(string $discount): void;
    public function applyPromocode(string $promocode): void;
}
