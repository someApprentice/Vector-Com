<?php
$direction = new Direction();
$direction->departments[] = $procurement;
$direction->departments[] = $sales;
$direction->departments[] = $advertising;
$direction->departments[] = $logistics;

$direction->secondAnticrisisMethod(Analyst::class, 1100, 75);