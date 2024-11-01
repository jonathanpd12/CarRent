<?php
    // Mengambil data dari form
    $nama_mobil = $_POST['nama_mobil'];
    $harga_per_hari = $_POST['harga'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $nomor_hp = $_POST['no_hp'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $durasi_sewa = $_POST['durasi_sewa'];
    $total_harga = $_POST['total_harga'];
    $username = $_POST['username']; // Menangkap data username yang dikirim dari form.php

    try {
        // Koneksi ke database menggunakan PDO
        $dbh = new PDO('mysql:host=localhost;dbname=dbase_carrental', 'root', '');

        // Set mode error untuk koneksi PDO ke mode exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Query SQL untuk menyimpan data ke dalam tabel pemesanan
        $sql = "INSERT INTO pemesanan (username, nama_mobil, harga, nama_lengkap, no_hp, tanggal_mulai, durasi_sewa, total_harga)
                VALUES (:username, :nama_mobil, :harga, :nama_lengkap, :no_hp, :tanggal_mulai, :durasi_sewa, :total_harga)";

        // Prepare statement SQL
        $stmt = $dbh->prepare($sql);

        // Bind parameter ke statement SQL
        $stmt->bindParam(':username', $username); // Bind data username ke parameter
        $stmt->bindParam(':nama_mobil', $nama_mobil);
        $stmt->bindParam(':harga', $harga_per_hari);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':nama_lengkap', $nama_lengkap);
        $stmt->bindParam(':no_hp', $nomor_hp);
        $stmt->bindParam(':tanggal_mulai', $tanggal_mulai);
        $stmt->bindParam(':durasi_sewa', $durasi_sewa);
        $stmt->bindParam(':total_harga', $total_harga);

        // Eksekusi statement
        $stmt->execute();

        // Redirect pengguna kembali ke halaman utama atau halaman konfirmasi
        header("Location: ../invoice.php");
        exit();
        
    } catch(PDOException $e) {
        // Tangani error jika terjadi
        echo "Error: " . $e->getMessage();
    }
?>
