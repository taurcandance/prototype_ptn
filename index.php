<?php
require_once 'Fish.php';

$fish = new Fish();
$fishClone1 = $fish->clone('okyn','yellow',2,15);
$fishClone2 = $fish->clone('schyka', 'green', 1.5, 23);
$fishClone2->swim();
$fishClone3 = clone $fish;


var_dump($fishClone3);
