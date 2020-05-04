<?php

// LightableInterface.php

interface LightableInterface {
    /**
     * @return bool
     */
    public function switchOn() :bool;

    /**
     * @return bool
     */
    public function switchOff() :bool;

}