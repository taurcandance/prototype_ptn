<?php
require_once 'Fish.php';

$fish = new Fish();

if (assert($fish->isSwim())) {
    echo 'success';
}

$fishClone = clone $fish;

if (assert($fishClone->isSwim())) {
    echo 'success';
}