<?php

// Definisi kelas KendaraanBBM
class KendaraanBBM {
    public function menggunakanBBM(): void {
        echo "Menggunakan BBM\n";
    }
}

// Definisi kelas KendaraanListrik
class KendaraanListrik {
    public function menggunakanBaterai(): void {
        echo "Menggunakan Baterai\n";
    }
}

// Definisi kelas Mobil yang merupakan turunan dari KendaraanBBM
class Mobil extends KendaraanBBM {
    // Meng-overide metode menggunakanBBM dari kelas induk
    public function menggunakanBBM(): void {
        echo "Mobil menggunakan BBM\n";
    }
}

// Definisi kelas MobilListrik yang merupakan turunan dari KendaraanListrik
class MobilListrik extends KendaraanListrik {
    // Meng-overide metode menggunakanBaterai dari kelas induk
    public function menggunakanBaterai(): void {
        echo "Mobil Listrik menggunakan Baterai\n";
    }
}

// Penggunaan kelas Mobil
$mobil = new Mobil();
$mobil->menggunakanBBM(); // Output: Mobil menggunakan BBM

// Penggunaan kelas MobilListrik
$mobilListrik = new MobilListrik();
$mobilListrik->menggunakanBaterai(); // Output: Mobil Listrik menggunakan Baterai

?>