<?php

class Vehicle
{
    const ENERGY = ['Fuel', 'Electric'];

    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels;
    protected string $energy;
    protected string $start;

    public function __construct(string $color, int $nbSeats,)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function forward(): string
    {
        $speed = "";

        if ($this->currentSpeed > 0) {
            $this->currentSpeed;
            $speed .= 'The truck in moving';
        } else {
            $this->currentSpeed;
            $speed .= 'The truck is at a standstill';
        }
        return $speed;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
            $this->currentSpeed = $currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Vehicle
    {
        if (in_array($energy, self::ENERGY)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getStart(): string
    {
        return $this->start;
    }

    public function setStart(string $start): void
        {
            $this->start = $start;
        }
}