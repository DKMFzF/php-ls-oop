<?php

namespace App;

class Developer extends Worker
{
    public string $subname;
    public string $itSpec;

    // конструктор для суперкласса
    public function __construct(
        string $name,
        int $age,
        array $hours,
        string $subname,
        string $itSpec
    ) {
        parent::__construct($name, $age, $hours);
        $this -> subname = $subname;
        $this -> itSpec = $itSpec;
    }

    // Переопределение функции
    public function work(): string
    {
        return 'Я работаю программистом';
    }
}