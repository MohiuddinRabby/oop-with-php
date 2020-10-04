<?php
interface Human
{
    //interface class method does't contain any body
    public function sayHello();
    function sayGreet();
}
class PersonOne implements Human
{
    /**
     * interface class can't be extends
     * they can only be implements
     */
    function sayHello()
    {
        echo "Hello\n";
    }
    function sayGreet()
    {
        echo "Salam\n";
    }
}
$po = new PersonOne;
$po->sayHello();
