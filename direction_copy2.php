<?php
$direction = new Direction();
$direction->departments[] = $procurement;
$direction->departments[] = $sales;
$direction->departments[] = $advertising;
$direction->departments[] = $logistics;

$direction->setSolary('analyst', 1100);
$direction->setCoffee('analyst', 75);
$direction->setLeader('analyst');
?>