<?php
class Human
{
    public $name;
    public $title;
    public function __construct($personTitle, $personName)
    {
        $this->title = $personTitle;
        $this->name = $personName;
        $this->sayName();
    }
    public function sayName()
    {
        echo "Name is {$this->title} {$this->name}\n";
    }
}
$humanObj = new Human('Mr', 'Doe');
$humanObj2 = new Human('Mr', 'Mike');
// $humanObj->sayName();
// $humanObj2->sayName();
