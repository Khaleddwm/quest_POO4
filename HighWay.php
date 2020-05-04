<?php

// HighWay.php

abstract class HighWay {

    protected $currentVehicles = array();
    protected $nbLane;
    protected $maxSpeed;

    abstract public function addVehicle(Vehicle $vehicle);

    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }
    
    public function getNbLane() :int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane) :void
    {
        $this->nbLane = $nbLane;
    }

     public function getMaxSpeed() :int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed) :void
    {
        $this->maxSpeed = $maxSpeed;
    }
   
}
