<?php

// Truck.php

require_once 'Vehicle.php';

class Truck extends Vehicle {
   
    private $energy;
    private $energyLevel;
    private $storageCapacity;
    private $charge = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }
    
    public function getEnergy() : string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
    }
        return $this;
    }

    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel) : void
    {
        $this->energyLevel = $energyLevel;
    }
    
    public function getStorageCapacity() : string
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity) : void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getCharge() : int
    {
        return $this->charge;
    }

    public function setCharge(int $charge) : void
    {
        $this->charge = $charge;
        if ($this->charge > $this->storageCapacity) {
            $this->charge = $this->storageCapacity;
        }
    }
    
    public function getStorage() : string
    {
        if ($this->charge == $this->storageCapacity) {
            return "full";
        } else {
            return "in filling";
        }
    }
}