<?php

namespace POO_PHP\Bank\Model;

class Adress
{
    private string $city;
    private string $neighborhood;
    private string $road;
    private string $number;

    public function __construct(
        string $city,
        string $neighborhood,
        string $road,
        string $number
    ) {
        $this->city = $city;
        $this->neighborhood = $neighborhood;
        $this->road = $road;
        $this->number = $number;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    public function getRoad(): string
    {
        return $this->road;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setCity(string $newCity): void
    {
        $this->city = $newCity;
    }

    public function setNeighborhood(string $newNeighborhood): void
    {
        $this->neighborhood = $newNeighborhood;
    }

    public function setRoad(string $newRoad): void
    {
        $this->road = $newRoad;
    }

    public function setNumber(string $newNumber): void
    {
        $this->number = $newNumber;
    }
}
