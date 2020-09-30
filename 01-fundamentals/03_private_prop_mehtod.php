<?php
class Fund
{
    private $initFund;
    public function __construct($initialFund = 0)
    {
        $this->initFund = $initialFund;
    }
    public function addFund($amount)
    {
        $this->initFund += $amount;
    }
    public function getTotal()
    {
        echo "Balance : {$this->initFund}";
    }
}
$f = new Fund(100);
/**
 * can't be access when initFund is private
$f->initFund = 50;
 */
$f->addFund(20);
$f->addFund(20);
$f->getTotal();
