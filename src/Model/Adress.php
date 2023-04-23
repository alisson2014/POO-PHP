<?php

namespace POO_PHP\Bank\Model;

use POO_PHP\Bank\Model\Traits\{AccessProperties, SetProperties};

/**
 * class Adress
 * @package POO_PHP\Bank\Model
 * @property string $city
 * @property string $neighborhood
 * @property string $road
 * @property string $number
 */

final class Adress
{
    use AccessProperties;
    use SetProperties;
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

    public function __toString(): string
    {
        return "Rua: {$this->road}, N°: {$this->number}" . PHP_EOL .
            "Bairro: {$this->neighborhood}" . PHP_EOL .
            "Cidade: {$this->city}" . PHP_EOL;
    }
}
