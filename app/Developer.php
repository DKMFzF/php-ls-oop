<?php

namespace App;


class Developer extends Worker
{
    public string $placeWork;
    public int $ageWork;

    public function __construct(
        string $name,
        int $age,
        string $placeWork,
        int $ageWork)
    {
        parent::__construct($name, $age);

        $this -> name = $name;
        $this -> age = $age;
        $this -> placeWork = $placeWork;
        $this -> ageWork = $ageWork;
    }

    public function work(): string
    {
        return 'Маму ебал';
    }

    public function getPlaceWork(): string
    {
        return $this->placeWork;
    }

    public function setPlaceWork(string $placeWork): void
    {
        $this->placeWork = $placeWork;
    }

    public function getAgeWork(): int
    {
        return $this->ageWork;
    }

    public function setAgeWork(int $ageWork): void
    {
        $this->ageWork = $ageWork;
    }
}