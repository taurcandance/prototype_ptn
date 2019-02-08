<?php

class Fish
{
    public $name;
    private $weight;
    private $color;
    private $length;
    public static $howManyClones = 0;

    public function __clone()
    {
        $this->name   = 'cloneName';
        $this->length = 'cloneLength';
        $this->weight = 'cloneWeight';
        $this->color  = 'cloneColor';
        ++static::$howManyClones;
    }

    public function isSwim(): bool
    {
        return true;
    }

    public function howManyClones(): int
    {
        return static::$howManyClones;
    }

    public function __destruct()
    {
        --static::$howManyClones;
    }
}