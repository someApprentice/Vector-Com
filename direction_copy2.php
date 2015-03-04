<?php
$direction = new Direction();
$direction->departments[] = $procurement;
$direction->departments[] = $sales;
$direction->departments[] = $advertising;
$direction->departments[] = $logistics;

$direction->setSolaryToEmpoyeesType('analyst', 1100);
$direction->setCoffeToEmpoyeesType('analyst', 75);
$direction->setToLeader('analyst');
?>