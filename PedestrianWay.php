<?php

// PedestrianWay.php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay {

    protected $nbLane = 1;
    protected $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skatebord) {
            $this->currentVehicles[] = $vehicle;
            var_dump($vehicle);
            echo "The vehicle is authorized to drive on the PedestrianWay.";
        } else {
            var_dump($vehicle);
            echo "The vehicle is not authorized to drive on the PedestrianWay.";
        }
    }
   
}