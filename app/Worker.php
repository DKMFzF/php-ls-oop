<?php

namespace App;

class Worker {
    // свойства
    public string $name;
    public int $age;
    public array $hours;

    // конструктор
    public function __construct($name, $age, $hours) {
        $this -> name = $name;
        $this -> age = $age;
        $this -> hours = $hours;
    }

    // методы
    public function work():string {
        return "Я работаю";
    }
}