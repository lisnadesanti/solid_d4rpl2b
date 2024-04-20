<?php
// Definisi antarmuka DBMS
interface DBMS {
    public function createConnection();
}

// Definisi kelas DBMSConnection
class DBMSConnection {
    public function connect(DBMS $dbms) {
        $dbms->createConnection();
    }
}

// Definisi kelas MySQL yang mengimplementasikan antarmuka DBMS
class MySQL implements DBMS {
    public function createConnection() {
        // Logic for creating a MySQL connection
        echo "MySQL connection created.\n";
    }
}

// Definisi kelas mongoDB yang mengimplementasikan antarmuka DMS
class MongoDB implements DBMS {
    public function createConnection() {
        // Logic for creating a MongoDB connection
        echo "MongoDB connection created.\n";
    }
}

// Contoh Penggunaan
$dbmsConnection = new DBMSConnection();
$mysql = new MySQL();
$mongoDB = new MongoDB();

// Connect to MySQL
$dbmsConnection->connect($mysql);

// Connect to MongoDB
$dbmsConnection->connect($mongoDB);
?>