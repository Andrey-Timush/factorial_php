<?php

declare(strict_types=1);

namespace Timush\Factorial;

class Factorial
{
    private $var = 1;
    public function __construct($var = 1) {
        echo "this is construct Factorial";
        $this->var = $var;
    }
    
    public function getValue() {
        $result = 1;
        for ($i = 1; $i <= $this->var; $i++)
            $result *= $i;
        return $result;
    }
}