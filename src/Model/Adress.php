<?php

namespace POO_PHP\Bank\Model;

/*
    * class Adress
    * @package POO_PHP\Bank\Model
    * @property-read string $city
    * @property-read string $neighborhood
    * @property-read string $road
    * @property-read string $number
*/

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

    private function getCity(): string
    {
        return $this->city;
    }

    private function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    private function getRoad(): string
    {
        return $this->road;
    }

    private function getNumber(): string
    {
        return $this->number;
    }

    private function setCity(string $newCity): void
    {
        $this->city = $newCity;
    }

    private function setNeighborhood(string $newNeighborhood): void
    {
        $this->neighborhood = $newNeighborhood;
    }

    private function setRoad(string $newRoad): void
    {
        $this->road = $newRoad;
    }

    private function setNumber(string $newNumber): void
    {
        $this->number = $newNumber;
    }

    public function __get(string $method)
    {
        $method = "get" . ucfirst($method);
        return $this->$method();
    }

    public function __set(string $method, string $value)
    {
        $method = "set" . ucfirst($method);
        return $this->$method($value);
    }

    public function __toString(): string
    {
        return "{$this->road}, {$this->number}, {$this->neighborhood}, {$this->city}";
    }
}
