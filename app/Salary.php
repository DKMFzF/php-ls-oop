<?php

namespace App;

class Salary
{
    static public int $salary = 0;
    static public function count(int $num): int
    {
        self::$salary +=  $num * 2000;
        return self::$salary;
    }
}