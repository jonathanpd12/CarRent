<?php
    // Informasi koneksi ke database
    $db_host = "localhost";         // Host database
    $db_user = "root";              // Username database
    $db_pass = "";                  // Password database
    $db_name = "dbase_carrental";   // Nama database
    
    try {    
        // Membuat koneksi PDO ke database
        $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    } catch(PDOException $e) {
        // Menampilkan pesan error jika terjadi masalah dalam koneksi
        die("Terjadi masalah: " . $e->getMessage());
    }
?>