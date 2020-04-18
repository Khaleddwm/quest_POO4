<?php

// index.php

require_once 'Truck.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Skatebord.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$car = new Car('green', 4, 'electric');

echo '<div style="text-align:center">';
echo '<h1 style="background-color:black; color:white">' . "Quest POO 4" . '</h1>';
echo '<div id="DivClignotante" style="visibility:visible; background-color:lightgrey">';
$car->tryCar();
echo '</div>';

$car->setNbWheels(4);
$car->setCurrentSpeed(127);
$car->setEnergyLevel(90);
$car->start();
echo '<h3 style="color:red">' . "This vehicle has " . $car->getEnergyLevel() . " liters in the tank." . '</h3>';
echo '<p style="color:green">' . $car->forward() . '</p>';
echo '<p style="color:darkorange; text-align:left">' . $car->brake() . '</p>';
echo '<p style="color:darkorange">' . $car->brake() . '</p>';
echo '<p style="color:green">' . $car->forward() . '</p>';
echo '<h3 style="color:red">' . "This vehicle has " . $car->getEnergyLevel() . " liters in the tank." . '</h3>';
echo '</div>';

var_dump($car);

echo '<p><br/>
<script type="text/javascript"> 
var clignotement = function(){ 
   if (document.getElementById("DivClignotante").style.visibility=="visible"){ 
      document.getElementById("DivClignotante").style.visibility="hidden"; 
   } 
   else{ 
   document.getElementById("DivClignotante").style.visibility="visible"; 
   } 
}; 
// mise en place de l appel de la fonction toutes les 0.8 secondes 
// Pour arrêter le clignotement : clearInterval(periode); 
periode = setInterval(clignotement, 800); 
</script></p>';


$camaro = new Car('purple', 2, 'fuel');
echo '<div style="text-align:center">';
echo '<div id="LblClignotant" style="background-color:lightgrey">';
$camaro->tryCar();
echo '</div>';

$car->setNbWheels(4);
$camaro->setCurrentSpeed(265);
$camaro->setEnergyLevel(70);
echo $camaro->start() . '<br>';
echo '<h3 style="color:red">' . "This vehicle has " . $camaro->getEnergyLevel() . " liters in the tank." . '</h3>';
echo '<p style="color:green">' . $camaro->forward() . '</p>';
echo '<p style="color:darkorange; text-align:left">' . $camaro->brake() . '</p>';
echo '<p style="color:darkorange">' . $camaro->brake() . '</p>';
echo '<p style="color:green">' . $camaro->forward() . '</p>';
echo '<h3 style="color:red">' . "This vehicle has " . $camaro->getEnergyLevel() . " liters in the tank." . '</h3>';
echo '</div>';

var_dump($camaro);

echo '<script type="text/javascript">
var signe = -1;
var clignotementFading = function(){
var obj = document.getElementById("LblClignotant");
if (obj.style.opacity >= 0.96){
signe = -1;
}
if (obj.style.opacity <= 0.04){
signe = 1;
}
obj.style.opacity = (obj.style.opacity * 1) + (signe * 0.04);
};

// mise en place de l appel de la fonction toutes les 0.085 secondes
// Pour arrêter le clignotement : clearInterval(periode);
periode = setInterval(clignotementFading, 85 );
</script>';


/*

$springfieldPolice = new Car('red', 4, 'fuel');

echo $springfieldPolice->start() . '<br>';
$springfieldPolice->setCurrentSpeed(50) . '<br>';
$springfieldPolice->setEnergyLevel(50) . '<br>';
echo $springfieldPolice->forward() . '<br>';
echo $springfieldPolice->brake() . '<br>';
echo $springfieldPolice->brake() . '<br>';
echo "This vehicle has " . $springfieldPolice->getEnergyLevel() . " liters in the tank." . '<br>' . '<br>';

$rockrider = new Bicycle('purple', 1);

$rockrider->setCurrentSpeed(20) . '<br>';
echo $rockrider->start() . '<br>';
echo $rockrider->forward() . '<br>';
echo $rockrider->brake() . '<br>';
echo $rockrider->brake() . '<br>' . '<br>';

var_dump(Car::ALLOWED_ENERGIES);

$iveco = new Truck('green', 10, 'fuel', 25);

$iveco->setNbWheels(8);
echo $iveco->start() . '<br>';
$iveco->setCurrentSpeed(90) . '<br>';
$iveco->setEnergyLevel(280) . '<br>';
echo $iveco->forward() . '<br>';
echo $iveco->brake() . '<br>';
echo $iveco->brake() . '<br>';
$iveco->setCharge(40);
echo "The vehicle load is currently " . $iveco->getCharge() . " tonnes." .'<br>';
echo "filling status of your vehicle: " . $iveco->getStorage() . "." . '<br>';
$iveco->setCharge(12);
echo "The vehicle load is currently " . $iveco->getCharge() . " tonnes." .'<br>';
echo "filling status of your vehicle: " . $iveco->getStorage() . "." . '<br>';
echo "This vehicle has " . $iveco->getEnergyLevel() . " liters in the tank." . '<br>';

var_dump($iveco);

echo '<h1>' . "Quest POO 03" . '</h1><br>';

$skater = new Skatebord('black', 1);
$mercedes = new Car('brown', 2, 'fuel');

$motorWay = new Motorway();
$motorWay->addVehicle($car). '<br>';
$motorWay->addVehicle($springfieldPolice) . '<br>';
$motorWay->addVehicle($iveco) . '<br>';
$motorWay->addVehicle($mercedes). '<br>';
$motorWay->addVehicle($rockrider) . '<br>';

$residentialWay = new ResidentialWay();
$residentialWay->addVehicle($iveco) . '<br>';
$residentialWay->addVehicle($skater) . '<br>';

$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle($car). '<br>';
$pedestrianWay->addVehicle($rockrider) . '<br>';
$pedestrianWay->addVehicle($skater) . '<br>';

echo '<h2>' . "Table motorWay" . '</h2><br>';
var_dump($motorWay->getCurrentVehicles()) . '<br>';
echo '<h2>' . "Table residentialWay" . '</h2><br>';
var_dump($residentialWay->getCurrentVehicles()) . '<br>';
echo '<h2>' . "Table pedestrianWay" . '</h2><br>';
var_dump($pedestrianWay->getCurrentVehicles()) . '<br>';

$car->setHasParkBrake(true);
echo $car->getHasParkBrake();

*/