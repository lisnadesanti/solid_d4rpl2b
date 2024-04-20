<?php

// Interface BarangElektronik
interface BarangElektronik {
    // Metode untuk beroperasi
    public function beroperasi();

    // Metode untuk berhenti
    public function berhenti();
}

// Kelas Lampu yang mengimplementasikan BarangElektronik
class Lampu implements BarangElektronik {
    // Metode untuk operasi lampu
    public function beroperasi() {
        echo "Lampu sedang beroperasi.\n";
    }

    // Metode untuk menghentikan lampu
    public function berhenti() {
        echo "Lampu dihentikan.\n";
    }
}

// Kelas KipasAngin yang mengimplementasikan BarangElektronik
class KipasAngin implements BarangElektronik {
    private $keaktifan = false;

    // Metode untuk operasi kipas angin
    public function beroperasi() {
        $this->keaktifan = true;
        echo "Kipas angin sedang beroperasi.\n";
    }

    // Metode untuk menghentikan kipas angin
    public function berhenti() {
        $this->keaktifan = false;
        echo "Kipas angin dihentikan.\n";
    }
}

// Kelas Modul yang merupakan abstraksi dari BarangElektronik
abstract class Modul implements BarangElektronik {
    protected $tingkatKeaktifan;

    // Metode untuk mengubah keaktifan modul
    public function berubah() {
        $this->tingkatKeaktifan = !$this->tingkatKeaktifan;
    }

    // Metode abstrak untuk beroperasi
    abstract public function beroperasi();

    // Metode abstrak untuk berhenti
    abstract public function berhenti();
}

// Kelas ModulTingkatTinggi yang merupakan turunan dari Modul
class ModulTingkatTinggi extends Modul {
    // Implementasi metode beroperasi
    public function beroperasi() {
        echo "Modul tingkat tinggi sedang beroperasi.\n";
    }

    // Implementasi metode berhenti
    public function berhenti() {
        echo "Modul tingkat tinggi dihentikan.\n";
    }
}

// Kelas ModulTingkatRendah yang merupakan turunan dari Modul
class ModulTingkatRendah extends Modul {
    // Implementasi metode beroperasi
    public function beroperasi() {
        echo "Modul tingkat rendah sedang beroperasi.\n";
    }

    // Implementasi metode berhenti
    public function berhenti() {
        echo "Modul tingkat rendah dihentikan.\n";
    }
}

// Tes kode program
// Buat objek untuk Lampu, KipasAngin, ModulTingkatTinggi, dan ModulTingkatRendah
$lampu = new Lampu();
$kipasAngin = new KipasAngin();
$modulTingkatTinggi = new ModulTingkatTinggi();
$modulTingkatRendah = new ModulTingkatRendah();

// Panggil metode untuk beroperasi dan berhenti
$lampu->beroperasi();
$lampu->berhenti();

$kipasAngin->beroperasi();
$kipasAngin->berhenti();

$modulTingkatTinggi->beroperasi();
$modulTingkatTinggi->berhenti();

$modulTingkatRendah->beroperasi();
$modulTingkatRendah->berhenti();

?>