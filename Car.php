<?php

// Car.php

require_once 'Vehicle.php';

class Car extends Vehicle {
    
    private $energy;
    private $energyLevel;
    private $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
    
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake!!! ";
            $this->energyLevel -= 0.01;
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start() : void
    {   
        parent::start();
        if($this->hasParkBrake == true) {
            throw new Exception("Your vehicle is started !" . '<br>' . "The parkbrake is activated.");
        } else {
            echo '<h2 style="color:red">' . "Your vehicle is started !" . '</h2>';
        }
    }
        
    public function getEnergy() : string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel() : float
    {
        return number_format($this->energyLevel, 2);
    }

    public function setEnergyLevel(int $energyLevel) : void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getHasParkBrake() : bool
    {
        return $this->hasParkBrake;
    }

    public function setHasParkBrake($hasParkBrake) : void
    {
        $this->hasParkBrake = $hasParkBrake;
    }   
 
}