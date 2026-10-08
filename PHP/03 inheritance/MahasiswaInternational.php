<?php

require_once 'Mahasiswa.php';

// Kelas MahasiswaInternational (Subclass) yang mewarisi Mahasiswa
class MahasiswaInternational extends Mahasiswa
{
    // Variabel tambahan untuk mahasiswa internasional
    private string $negaraAsal;

    /*
     * PHP tidak punya constructor overloading, jadi 3 constructor Java digabung
     * jadi satu. Parameter ke-3 bisa berupa string (negara) ATAU int (umur):
     *   new MahasiswaInternational()                        -> tanpa parameter
     *   new MahasiswaInternational("Sarah", "INT1", "UK")   -> nama, nim, negara
     *   new MahasiswaInternational("David", "INT2", 23, "UK") -> nama, nim, umur, negara
     */
    public function __construct(
        string $nama = "Belum Diisi",
        string $nim = "Belum Diisi",
        int|string $umurAtauNegara = 0,
        string $negaraAsal = "Belum Diisi"
    ) {
        if (is_string($umurAtauNegara)) {
            // Constructor 2: nama, nim, negara asal
            parent::__construct($nama, $nim); // Memanggil constructor parent dengan dua parameter
            $this->negaraAsal = $umurAtauNegara;
        } else {
            // Constructor 1 (tanpa parameter) dan Constructor 3 (nama, nim, umur, negara asal)
            parent::__construct($nama, $nim, $umurAtauNegara); // Memanggil constructor parent
            $this->negaraAsal = $negaraAsal;
        }
    }

    // Getter dan Setter untuk negara asal
    public function getNegaraAsal(): string
    {
        return $this->negaraAsal;
    }

    public function setNegaraAsal(string $negaraAsal): void
    {
        $this->negaraAsal = $negaraAsal;
    }

    // Override method tampilkanInfo untuk menampilkan informasi tambahan
    public function tampilkanInfo(): void
    {
        parent::tampilkanInfo(); // Memanggil method tampilkanInfo dari parent
        echo "Negara Asal: " . $this->negaraAsal . PHP_EOL;
    }
}
