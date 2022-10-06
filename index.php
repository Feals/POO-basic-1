<?php
require_once "Bicycle.php";
require_once "Car.php";

$bike = new Bicycle ("blue");
$blackbike = new Bicycle ("black");

    echo "this bicycle is"  . " " . $bike->getColor() . "<br>";
    echo "blackbike is " . $blackbike->getColor() . " and his speed is too fast :" . $blackbike->forward() . "km/h <br>" . $blackbike->brake() ."<br>";

    $yellowCar = new Car ("yellow", 4, "electricty");
    echo "this car is " . $yellowCar->getColor() . " have : " . $yellowCar->getNbSeats() . " seats and works with " . $yellowCar->getEnergy() ."<br><br><br>";
    echo $yellowCar->start() . $yellowCar->forward() . " your speed is " . $yellowCar->getCurrentSpeed() ."km/h <br>" . $yellowCar->brake();

?>

