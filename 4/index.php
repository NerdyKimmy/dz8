<?php

require_once 'Book.php';
require_once 'Outerwear.php';

$book = new Book();
$book->setPrice(15.99);
$book->applyDiscount("10%");
$book->applyPromocode("BOOK2024");

$outerwear = new Outerwear();
$outerwear->setPrice(99.99);
$outerwear->setColor("Red");
$outerwear->setSize("M");
$outerwear->applyDiscount("20%");
$outerwear->applyPromocode("WINTERSALE");

?>
