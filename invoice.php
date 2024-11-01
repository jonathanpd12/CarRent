<?php
    // Lakukan koneksi ke database
    $koneksi = new mysqli("localhost", "root", "", "dbase_carrental");

    // Periksa koneksi
    if ($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }

    // Buat query SQL untuk mengambil data pemesanan
    $sql = "SELECT * FROM pemesanan ORDER BY car_id DESC LIMIT 1";

    // Eksekusi query
    $result = $koneksi->query($sql);

    // Periksa apakah ada data pemesanan
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Ambil baris data pemesanan terakhir
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Invoice</title>
        <link rel="stylesheet" href="css/invoice.css" />
    </head>

    <body>
    <div class="container">
        <div class="header">
            <h1>CarRent</h1>
            <h2>Payment Details</h2>
            <p>Date: <?php echo date("Y-m-d"); ?></p> 
        </div>
        <div class="item">
            <p><strong>Car Name :</strong> <?php echo $row['nama_mobil']; ?></p>
            <p><strong>Customer Name :</strong> <?php echo $row['nama_lengkap']; ?></p>
            <p><strong>Phone Number :</strong> <?php echo $row['no_hp']; ?></p>
            <p><strong>Rental Start Date :</strong> <?php echo $row['tanggal_mulai']; ?></p>
            <p><strong>Rental Duration :</strong> <?php echo $row['durasi_sewa']; ?> days</p>
            <p><strong>Total Price :</strong> Rp <?php echo number_format($row['total_harga'], 0, ",", "."); ?></p>
        </div>
        <div class="total">
            <p>Total: Rp <?php echo number_format($row['total_harga'], 0, ",", "."); ?> </p>
        </div>
        <a href="index.php" class="submit">Confirm</a>
    </div>
</body>
</html>

<?php
    } else {
        echo "Tidak ada data pemesanan.";
    }
    // Tutup koneksi database
    $koneksi->close();
?>