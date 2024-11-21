<?php

require_once('../app/Worker.php');
require_once('../app/Developer.php');

$worker = new \App\Worker('Кирилл', 19, [1, 2, 3, 4, 5]);
$developer = new \App\Developer('Максим', 19, [1, 2, 3, 4, 5], 'Чернухин', 'Frontender');

echo $worker -> work() . PHP_EOL;
echo $developer -> work() . PHP_EOL;

echo $developer -> getAge() . PHP_EOL;
