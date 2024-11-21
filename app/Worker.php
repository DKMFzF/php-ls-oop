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

    public function getName():string
    {
        return $this -> name;
    }

    public function setName(string $newName):void
    {
        $this -> name = $newName;
    }

    public function getAge():int
    {
        return $this -> age;
    }

    public function setAge(int $newAge): void
    {
        $this -> age = $newAge;
    }

    public function getHours():array
    {
        return $this -> hours;
    }

    public function setHours(array $newHours):void
    {
        $this -> hours = $newHours;
    }
}