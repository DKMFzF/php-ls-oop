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

    public function getSubName(): string
    {
        return $this -> subname;
    }

    public function setSubName(string $newSubName): void
    {
        $this -> subname = $newSubName;
    }

    public function getItSpec():string
    {
        return $this -> itSpec;
    }

    public function setItSpec(string $newItSpec): void
    {
        $this -> itSpec = $newItSpec;
    }
}