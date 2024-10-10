<?php

class Siswa
{
    // deklarasikan atribut-atribut kelas Siswa
    public $nama;
    public $nis;
    public $alamat;
    public $jurusan;
    public $tanggalLahir;



    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($nama, $nis, $alamat, $jurusan, $tanggalLahir)
    {
        $this->nama = $nama;
        $this->nis = $nis;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
        $this->tanggalLahir = new DateTime($tanggalLahir);
    }

    // buat metode untuk menghitung umur siswa
    public function hitungUmur()
    {
        $today = new DateTime(); // Tanggal hari ini
        $umur = $today->diff($this->tanggalLahir)->days;
        return $umur;
    }
}

// buat dua buah objek siswa
$siswa_1 = new Siswa("Bambang", "1234", "Loa Bakung", "PPLG", "27-11-2006");
$siswa_2 = new Siswa("Bahrun", "1235", "Air Putih", "PPLG", "13-01-2007");

// Hitung umur masing-masing siswa
$umur_siswa_1 = $siswa_1->hitungUmur();
$umur_siswa_2 = $siswa_2->hitungUmur();

// Contoh output
if ($umur_siswa_1 > $umur_siswa_2) {
    echo "{$siswa_1->nama} lebih tua dibandingkan {$siswa_2->nama}.";
} elseif ($umur_siswa_1 < $umur_siswa_2) {
    echo "{$siswa_2->nama} lebih tua dibandingkan {$siswa_1->nama}.";
} else {
    echo "{$siswa_1->nama} dan {$siswa_2->nama} memliki umur yang sama.";
}

// contoh output:
// Bambang lebih tua dibandingkan Bahrun