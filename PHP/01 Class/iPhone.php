<?php

class iPhone
{
    // Properties
    /*
     * warna/color
     * storage/kapasistas penyimpanan
     */
    public string $color;
    public string $storage;

    // Methods
    /*
     * 1. Konstraktor() --> di PHP namanya selalu __construct()
     *    (di Java namanya sama dengan nama class)
     * 2. getColor()
     * 3. getStorage()
     */

    // Konstraktor
    /*
     * jadi setiap objek yang dibentuk dari class harus memberikan nilai/value
     * terhadap beberapa properties
     */
    public function __construct(string $color, string $storage)
    {
        $this->color = $color;
        $this->storage = $storage;
    }

    // public -> bisa diakses dari umum
    // : string --> output dari method getColor tipe datanya string
    // getColor() --> adalah nama method
    // return --> karena di definisi method ada outputnya, maka di dalam method harus
    // menggunakan return supaya punya keluaran/output.
    public function getColor(): string
    {
        return $this->color;
    }

    public function getStorage(): string
    {
        return $this->storage;
    }
}
