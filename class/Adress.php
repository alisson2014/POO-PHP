<?php

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
}
