<?php
$direction = new Direction();
$direction->departments[] = $procurement;
$direction->departments[] = $sales;
$direction->departments[] = $advertising;
$direction->departments[] = $logistics;

$direction->secondAnticrisisMethod('analyst', 1100, 75);