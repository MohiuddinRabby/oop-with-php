<?php
class MainClass
{
    public function doSomething()
    {
        echo "doing something\n";
    }
    //final keyword method can't be over rided
    final public function doTask()
    {
        echo "do any task\n";
    }
}
class SubClass extends MainClass
{
    public function doSomething()
    {
        echo "doing nothing\n";
    }
    //error
    /*
public function doTask()
{
echo "do no task\n";
}
 */
}
$sc = new SubClass;
$sc->doSomething();
$sc->doTask();
