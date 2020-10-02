<?php
class ParentClass
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
        $this->sayHi();

    }
    public function sayHi()
    {
        echo "Hi {$this->name}\n";
    }
    public function funcTest()
    {
        echo "Test function\n";
    }
}
class ChildClass extends ParentClass
{
    public function sayHi()
    {
        //scope - calling func exculisively from parentClass
        parent::sayHi();
        parent::funcTest();
        echo "hi from childclass\n";
    }
}
$cc = new ChildClass("Doe");
