<?php

// ResidentialWay.php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay {

    protected $nbLane = 2;
    protected $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Vehicle) {
            $this->currentVehicles[] = $vehicle;
            var_dump($vehicle);
            echo "The vehicle is authorized to drive on the ResidentialWay.";
        } else {
            var_dump($vehicle);
            echo "The vehicle is not authorized to drive on the ResidentialWay.";
        }
    }
   
}