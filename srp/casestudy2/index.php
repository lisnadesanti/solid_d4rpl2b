<?php
class Mahasiswa {
    private $nim;
    private $nama;

    public function __construct($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }
}

class MahasiswaView {
    public function showMahasiswa($mhs) {
        echo "NIM: " . $mhs->getNim() . "<br>";
        echo "Nama: " . $mhs->getNama() . "<br>";
    }
}

// Contoh penggunaan
$mahasiswa = new Mahasiswa("2205046", "Lisna Desanti");
$view = new MahasiswaView();
$view->showMahasiswa($mahasiswa);
?>