<?php

require_once 'BangunDatar.php';
require_once 'Lingkaran.php';
require_once 'Persegi.php';
require_once 'Segitiga.php';

/*
 * Pembantu tampilan: Java mencetak float sebagai "100.0" (bukan "100")
 * dan "706.85834" (presisi float 32-bit), sedangkan PHP memakai double.
 * Fungsi ini hanya mengatur TAMPILAN agar mirip output Java.
 */
function tampilFloat(float $nilai): string
{
    // paksa ke presisi float 32-bit dulu (setara cast (float) di Java)
    $nilai = unpack('f', pack('f', $nilai))[1];

    if ($nilai == floor($nilai)) {
        return number_format($nilai, 1, '.', '');
    }
    return rtrim(number_format($nilai, 5, '.', ''), '0');
}

$bd = new BangunDatar();

$bd->luas();
$bd->keliling();

// instantiate / membuat objek lingkaran
$lk = new Lingkaran(15);
echo "Luas lingkaran: " . tampilFloat($lk->luas()) . PHP_EOL;
echo "keliling lingkaran: " . tampilFloat($lk->keliling()) . PHP_EOL;

// instantiate / membuat objek Persegi
$pj = new Persegi(10);
echo "Luas Bujur Sangkar: " . tampilFloat($pj->luas()) . PHP_EOL;
echo "keliling Bujur Sangkar: " . tampilFloat($pj->keliling()) . PHP_EOL;

// instantiate / membuat objek segitiga
$sg = new Segitiga(10, 8);
echo "Luas Segitiga: " . tampilFloat($sg->luas()) . PHP_EOL;

// karena class Segitiga tidak mendefinisikan keliling
// maka ketika sg memanggil keliling(), yang terpanggil
// adalah keliling() yang ada di parent/super class yaitu
// BangunDatar
$sg->keliling();
// echo "keliling Segitiga: " . $sg->keliling() . PHP_EOL;
