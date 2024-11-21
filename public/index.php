<?php

require_once('../vendor/autoload.php');

$obj = new \App\Developer('Кирилл', 'Дорошев', 'Михайлович', 19, 'hueSosik', 2);

echo $obj -> work() . PHP_EOL;
echo $obj -> goOutWork() . PHP_EOL;
echo $obj -> getHes() . PHP_EOL;

// реализация статических свойств и методов
echo \App\Salary::count($obj -> ageWork) . PHP_EOL;
echo \App\Salary::count($obj -> ageWork) . PHP_EOL;