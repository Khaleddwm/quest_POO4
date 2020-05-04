<?php

// Vehicle.php

require_once 'LightableInterface.php';

class Vehicle {

	protected $color; 
	protected $currentSpeed;
	protected $nbSeats;
    protected $nbWheels;
    
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }
    
    public function getColor() :string
    {
        return $this->color;
    }

    public function setColor(string $color) :void
    {
        $this->color = $color;
    }

    public function getNbWheels() :int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels) :void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getCurrentSpeed() :int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed) :void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getNbSeats() :int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeat) :void
    {
        $this->nbSeats = $nbSeat;
    }

    public function start()
    {   
        return "Your vehicle is started !";
    }
    
    public function forward()
    {
        if($this->currentSpeed > 0) {
            return "Your speed is " . $this->currentSpeed . " km/h... GO !";
        }else {
            return "Your speed is " . $this->currentSpeed . " km/h... BYE BYE !";
        }
    }
    
    public function brake() :string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake!!! ";
    }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    
}