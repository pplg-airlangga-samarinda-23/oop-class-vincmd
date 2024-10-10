<?php
class Balok
{
    // deklarasikan atribut-atribut kelas Balok
    public $panjang;
    public $lebar;
    public $tinggi;

    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($panjang, $lebar, $tinggi)
    {
        $this->panjang = $panjang; {
            $this->lebar = $lebar; {
                $this->tinggi = $tinggi;
            }
        }
    }


    // definisikan metode menghitung volume, luas permukaan, 
    public function hitungvolume()
    {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
    public function hitungluaspermukaan()
    {
        return 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
    }
}

$balok_1 = new Balok(4, 8, 5);
$balok_2 = new Balok(3, 10, 12);
echo "balok" . "<br>";
echo "balok 1" . "<br>";
echo "volume balok 1 adalah " . $balok_1->hitungvolume() . "<br>";
echo "luas permukaan balok 1 adalah " . $balok_1->hitungluaspermukaan() . "<br>";
echo "balok" . "<br>";
echo "balok 2" . "<br>";
echo "volume balok 2 adalah " . $balok_2->hitungvolume() . "<br>";
echo "luas permukaan balok 2 adalah " . $balok_2->hitungluaspermukaan() . "<br>";

// contoh output: Balok

// Balok 1
// Volume: 160
// Luas Permukaan: 184

// Balok 2
// Volume: 360
// Luas Permukaan: 372