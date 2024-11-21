<?php

require_once('../vendor/autoload.php');

$obj = new \App\Developer('Кирилл', 19, 'HueSosik', 1);

echo $obj -> work() . PHP_EOL;
echo $obj -> goOutWork() . PHP_EOL;