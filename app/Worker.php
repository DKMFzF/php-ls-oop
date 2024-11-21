<?php

namespace App;


class Worker implements WorkerInterface
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this -> name = $name;
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
        return $this -> name;
    }

    public function setName(string $newName): void
    {
        $this -> name = $newName;
    }

    public function getAge(): int
    {
        return $this -> age;
    }
}