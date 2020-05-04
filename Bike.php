<?php

// Bike.php

require_once 'Vehicle.php';

class Bike extends Vehicle implements LightableInterface {

    /**
     * @return bool
     */
    public function switchOn() :bool
    {   // Si la vitesse est au dessus de 10 km/h
        if ($this->currentSpeed > 10)
        {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * @return bool
     */
    public function switchOff() :bool
    {
         return false;
    }
}