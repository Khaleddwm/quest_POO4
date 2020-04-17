<?php

// MotorWay.php

require_once 'HighWay.php';

final class MotorWay extends HighWay {

    protected $nbLane = 4;
    protected $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Car || $vehicle instanceof Truck) {
            $this->currentVehicles[] = $vehicle;
            var_dump($vehicle);
            echo "The vehicle is authorized to drive on the MotorWay.";
        } else {
            var_dump($vehicle);
            echo "The vehicle is not authorized to drive on the MotorWay.";
        }
    }
          
}