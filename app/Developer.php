<?php

namespace App;


class Developer extends Worker
{
    use HesRest;

    public string $placeWork;
    public int $ageWork;

    public function __construct(
        string $name,
        string $subname,
        string $patronymic,
        int $age,
        string $placeWork,
        int $ageWork)
    {
        parent::__construct($name, $subname, $patronymic, $age);

        $this -> name = $name;
        $this -> subname = $subname;
        $this -> patronymic = $patronymic;
        $this -> age = $age;
        $this -> placeWork = $placeWork;
        $this -> ageWork = $ageWork;
    }

    public function work(): string
    {
        return 'Маму ебал';
    }
}