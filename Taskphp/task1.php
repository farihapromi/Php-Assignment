<?php

abstract class Shape
{

    abstract public function getArea();
}
class Circle extends Shape
{
    private $radius;
    public function __construct($radius)
    {

        $this->radius = $radius;
    }
    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

}
class Rectangle extends Shape
{
    private $width;
    private $height;


    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }


    public function getArea()
    {
        return $this->width * $this->height;
    }
}
class Square extends Shape
{
    private $width;



    public function __construct($width)
    {
        $this->width = $width;

    }


    public function getArea()
    {
        return $this->width * pow($this->width, 2);
    }
}
$circle = new Circle(4);
echo "Area of Crcle is" . $circle->getArea() . "\n";

$rectangle = new Rectangle(4, 7);
echo "Area of Rectangle is" . $rectangle->getArea() . "\n";
$square = new Square(6);
echo "Area of Square" . $square->getArea() . "\n";





?>
