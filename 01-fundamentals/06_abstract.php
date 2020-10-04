<?php
abstract class Shape
{
    abstract public function getArea();
    abstract public function getPerimeter();
}
class Triangle extends Shape
{
    //must implement getArea() and getPerimeter()
    public function getArea()
    {
        echo "Area";
    }
    public function getPerimeter()
    {
        echo "Perimeter";
    }
}
$rec = new Triangle;
$rec->getPerimeter();
//error
//abstract class or method can't be instantiate
$sha = new Shape;
$sha->getPerimeter();
//
