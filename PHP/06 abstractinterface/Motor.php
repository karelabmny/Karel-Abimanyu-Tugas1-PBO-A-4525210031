<?php

require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';

class Motor extends Vehicle implements Fuelable, Movable
{
    // Memakai default method refuel() dari Fuelable (lewat trait)
    use FuelableDefault;

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    // Implementasi method abstract dari Vehicle
    public function move(): void
    {
        echo $this->name . " bergerak di tanah gravel." . PHP_EOL;
    }
}
