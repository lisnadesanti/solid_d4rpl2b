<?php
class Persegi {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function getSisi() {
        return $this->sisi;
    }
}

class PenghitungPersegi {
    public function hitungLuas(Persegi $persegi) {
        $sisi = $persegi->getSisi();
        return $sisi * $sisi;
    }
}

// Contoh penggunaan
$persegi = new Persegi(4);
$penghitungPersegi = new PenghitungPersegi();
echo "Luas persegi: " . $penghitungPersegi->hitungLuas($persegi);
?>