<?php
require_once 'Prototype.php';

class Fish implements Prototype
{
    public $name;
    private $weight;
    private $color;
    private $length;


    public function __construct()
    {
    }

    public function clone($name, $color, $weight, $length)
    {
        $newFish         = new Fish();
        $newFish->name   = $name;
        $newFish->weight = $color;
        $newFish->color  = $weight;
        $newFish->length = $length;

        return $newFish;
    }

    public function __clone()
    {
     $this->name = 'clone1name';
     $this->length = 'clone1length';
     $this->weight = 'clone1weight';
     $this->color = 'clone1color';
    }

    function swim(){}
}