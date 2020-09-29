<?php
class Human
{
    //property
    public $name;
    //method
    public function sayHello()
    {
        echo "hi {$this->name} \n";
    }
}
class Cat
{
    //method
    public function sayHello()
    {
        echo "mewoo\n";
    }
}
class Dog
{
    //method
    public function sayHello()
    {
        echo "woff!\n";
    }
}
//Human object
$humanOne = new Human();
$humanOne->name = "Doe"; //set
$humanOne->sayHello();
//Cat object
$catOne = new Cat();
$catOne->sayHello();
//Dog object
$dogOne = new Dog();
$dogOne->sayHello();
