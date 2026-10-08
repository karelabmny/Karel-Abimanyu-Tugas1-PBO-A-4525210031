<?php

/*
 * PHP TIDAK mendukung default method di dalam interface (fitur Java 8).
 * Jadi "interface Fuelable dengan default method" di Java dipecah jadi dua:
 *   1. interface Fuelable      -> kontrak (dipakai untuk implements / instanceof)
 *   2. trait FuelableDefault   -> isi default method refuel()
 * Class yang mau memakai implementasi default cukup menulis: use FuelableDefault;
 */
interface Fuelable
{
    public function refuel(): void;
}

// Default method untuk mengisi bahan bakar
trait FuelableDefault
{
    public function refuel(): void
    {
        echo "Mengisi bahan bakar umum." . PHP_EOL;
    }
}
