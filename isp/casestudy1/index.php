<?php

// Interface Shape3Dimension
interface Shape3Dimension {
    // Metode untuk menghitung volume
    public function calculateVolume();
}

// Interface Shape2Dimension
interface Shape2Dimension {
    // Metode untuk menghitung luas
    public function calculateArea();
}

// Kelas Kubus yang mengimplementasikan Shape3Dimension
class Kubus implements Shape3Dimension {
    // Metode untuk menghitung volume kubus
    public function calculateVolume() {
        echo "Menghitung volume kubus\n";
    }
}

// Kelas Persegi yang mengimplementasikan Shape2Dimension
class Persegi implements Shape2Dimension {
    // Metode untuk menghitung luas persegi
    public function calculateArea() {
        echo "Menghitung luas persegi\n";
    }
}

// Tes kode program
// Buat objek untuk Kubus dan Persegi
$kubus = new Kubus();
$persegi = new Persegi();

// Panggil metode untuk menghitung volume dan luas
$kubus->calculateVolume();
$persegi->calculateArea();

?>