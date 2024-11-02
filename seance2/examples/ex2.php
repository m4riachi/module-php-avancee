<?php
class base {
    public $a;
    readonly int $b;
    static  int $c;

    public function setA()
    {
        $this->a = 1;
    }

    public function getA(): int
    {
        return $this->a;
    }

    public function setB(int $b): void
    {
        $this->b = $b;
    }
    public function getB(): int
    {
        return $this->b;
    }

    public function setC(int $c): void
    {
        self::$c = $c;
    }
    public function getC(): int
    {
        return self::$c;
    }
}

$test = new base();
$test->setA(1);
echo $test->getA() . "\n";

$test->setB(2);
echo $test->getB() . "\n";

$test->setC(3);
echo $test->getC() . "\n";

$test2 = new base();
echo $test2->getC() . "\n";
