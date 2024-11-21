<?php

namespace App;


class Worker implements WorkerInterface
{
    public string $name;
    public string $subname;
    public string $patronymic;
    public int $age;

    public function __construct(
        string $name,
        string $subname,
        string $patronymic,
        int $age)
    {
        $this->name = $name;
        $this->subname = $subname;
        $this -> patronymic = $patronymic;
        $this -> age = $age;
    }

    public function work(): string
    {
        return "I'm working";
    }

    public function goOutWork(): string
    {
        return "I'm go out";
    }

    public function getName(): string
    {
        return $this->name;
    }
}