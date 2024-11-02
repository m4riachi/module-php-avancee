<?php
class base {
    public function foo(int $a): void
    {
        echo "Valid $a \n";
    }
}

class derived extends base {
    public function foo(int $b): void
    {
        parent::foo($b);
    }
}

$test = new derived();
$test->foo(b : 4);

