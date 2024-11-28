<?php

require_once 'Truck.php';

$truck = new Truck('dark blue metered', 3, 'Fuel', 20);
$truck->setLoading(20);
$truck->setStart('The truck starts');
$truck->setCurrentSpeed(80);

echo 'Description of the truck : ' . 'Color ' . $truck->getColor() . ', ' . $truck->getNbSeats() . ' seats, ' . $truck->getEnergy() . ', ' . $truck->getStorageCapacity() . ' m³ <br>';
echo 'loading : ' . $truck->getLoading() . ' cubic meters of goods <br>';
echo 'Condition load : ' . $truck->fullInFilling() . '<br>';
echo $truck->getStart() . '<br>';
echo 'speed of the truck ' . $truck->getCurrentSpeed() . ' km/h <br>';
echo $truck->forward() . '<br><br><br>';


$truck2 = new Truck('dark blue metered', 3, 'Fuel', 20);
$truck2->setLoading(0);
$truck2->setStart('The truck starts');
$truck2->setCurrentSpeed(0);

echo 'Description of the truck : ' . 'Color ' . $truck2->getColor() . ', ' . $truck2->getNbSeats() . ' seats, ' . $truck2->getEnergy() . ', ' . $truck2->getStorageCapacity() . ' m³ <br>';
echo 'loading : ' . $truck2->getLoading() . ' cubic meters of goods <br>';
echo 'Condition load : ' . $truck2->fullInFilling() . '<br>';
echo $truck2->getStart() . '<br>';
echo 'speed of the truck ' . $truck2->getCurrentSpeed() . ' km/h <br>';
echo $truck2->forward() . '<br><br><br>';
?>