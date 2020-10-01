<?php
class Animal
{
    protected $animalName;
    public function __construct($name)
    {
        $this->animalName = $name;
    }
    public function greet()
    {
    }
}
class Human extends Animal
{
    public function greet()
    {
        echo "Hi {$this->animalName}\n";
    }
}
class Cat extends Animal
{
    public function greet()
    {
        echo "Hi {$this->animalName}\n";
    }
}
$human1 = new Human("Doe");
$human1->greet();
$cat1 = new Cat("Tom");
$cat1->greet();
