<?php

// Interface untuk fitur-fax
interface FiturFax {
    public function terimaFax();
}

// Interface untuk fitur-cetak
interface FiturCetak {
    public function cetakKertas();
}

// Interface untuk fitur-scan
interface FiturScan {
    public function scanKertas();
}

// Printer flagship
class PrinterFlagship implements FiturFax, FiturCetak, FiturScan {
    public function terimaFax() {
        echo "Menerima fax...\n";
    }

    public function cetakKertas() {
        echo "Mencetak kertas...\n";
    }

    public function scanKertas() {
        echo "Memindai kertas...\n";
    }
}

// Printer entry level
class PrinterEntryLevel implements FiturCetak {
    public function cetakKertas() {
        echo "Mencetak kertas...\n";
    }
}

// Printer mid range
class PrinterMidRange implements FiturCetak, FiturScan {
    public function cetakKertas() {
        echo "Mencetak kertas...\n";
    }

    public function scanKertas() {
        echo "Memindai kertas...\n";
    }
}

// Contoh penggunaan

$printerFlagship = new PrinterFlagship();
$printerFlagship->terimaFax();
$printerFlagship->cetakKertas();
$printerFlagship->scanKertas();

$printerEntryLevel = new PrinterEntryLevel();
$printerEntryLevel->cetakKertas();

$printerMidRange = new PrinterMidRange();
$printerMidRange->cetakKertas();
$printerMidRange->scanKertas();

?>
