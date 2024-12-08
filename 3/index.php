<?php

abstract class Shape
{
    abstract public function getArea(): int;
}

class Rectangle extends Shape
{
    private int $width;
    private int $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): int
    {
        return $this->width * $this->height;
    }
}

class Square extends Shape
{
    private int $side;

    public function __construct(int $side)
    {
        $this->side = $side;
    }

    public function getArea(): int
    {
        return $this->side * $this->side;
    }
}

$rect = new Rectangle(5, 10);
echo "Rectangle Area: " . $rect->getArea() . PHP_EOL;

$square = new Square(5);
echo "Square Area: " . $square->getArea() . PHP_EOL;

?>
