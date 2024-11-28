<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private string $storageCapacity;
    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->storageCapacity = $storageCapacity;
        $this->energy = $energy;
    }

    public function fullInFilling()
    {
        $conditionLoad = "";

        if ($this->loading < $this->storageCapacity) {
        
        $this->loading;
        $conditionLoad .= 'in filling';
        } else {
            $conditionLoad .= 'full';
        }
        return $conditionLoad;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading)
    {
        $this->loading = $loading;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }


}

?>