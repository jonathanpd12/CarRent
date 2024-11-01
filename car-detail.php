<?php
  require_once("php/status_pengguna.php");

  // Koneksi ke database menggunakan PDO
  $db_host = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "dbase_carrental";

  try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    // Atur mode error untuk PDO agar melempar pengecualian ketika terjadi kesalahan
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    // Tangkap pengecualian jika terjadi kesalahan koneksi
    die("Koneksi gagal: " . $e->getMessage());
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Details</title>
  <link rel="stylesheet" href="css/car-details.css" />

  <!-- Fontawesome Link for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body>
  <header>
    <nav class="navbar">
      <h2 class="logo"><a href="#">CarRent</a></h2>
      <input type="checkbox" id="menu-toggler" />
      <label for="menu-toggler" id="hamburger-btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
          <path d="M0 0h24v24H0z" fill="none" />
          <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z" />
        </svg>
      </label>
      <ul class="all-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="cars.php">Cars</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php if ($logged_in) : ?>
          <li class="nav-profile">
            <a href="#" class="nav-sign-in">Profile <i class="fas fa-caret-down"></i></a>
            <ul class="sub-menu">
              <li><i class="fas fa-user"></i> <a href="profile.php">My Profile</a></li>
              <li><i class="fas fa-history"></i> <a href="transaction_history.php">Transaction History</a></li>
              <li>
                <form action="" method="post">
                  <button type="submit" name="logout" class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
        <?php else : ?>
          <li><a class="nav-sign-in" href="sign-in_sign-up.php">Sign In</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>

  <!-- Bagian untuk menampilkan detail mobil -->
  <section class="car-details">
    <?php
    // Mengambil parameter id mobil dari URL
    if (isset($_GET['id_mobil'])) {
      $car_id = $_GET['id_mobil'];
    }

    // Query untuk mengambil detail mobil dari database berdasarkan id
    $sql = "SELECT * FROM detail WHERE id_mobil = :car_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':car_id', $car_id);
    $stmt->execute();

    // Memeriksa apakah ada hasil yang ditemukan
    if ($stmt->rowCount() > 0) {
      // Meloop melalui setiap baris hasil query
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Menetapkan data yang diambil ke variabel-variabel
        $nama_mobil = $row["nama_mobil"];
        $gambar = $row["gambar"];
        $tenaga = $row["tenaga"];
        $jumlah_pintu = $row["jumlah_pintu"];
        $jenis_transmisi = $row["jenis_transmisi"];
        $kapasitas_mesin = $row["kapasitas_mesin"];
        $kondisi = $row["kondisi"];
        $bahan_bakar = $row["bahan_bakar"];
        $harga = $row["harga"];
    ?>
        <!-- Container untuk setiap detail mobil -->
        <div class="container">
          <!-- Bagian Kiri (Gambar) -->
          <div class="product-img">
            <img src="<?php echo htmlspecialchars($gambar); ?>" alt="Gambar Mobil">
          </div>

          <!-- Bagian Kanan (Detail) -->
          <div class="product-content">
            <h2 class="product-title"> <?php echo htmlspecialchars($nama_mobil); ?> </h2>

            <!-- Menampilkan harga mobil -->
            <div class="product-price">
              <p><strong>Harga:</strong> Rp <?php echo number_format($harga, 0, ',', '.'); ?> </p>
            </div>

            <!-- Menampilkan detail mobil -->
            <div class="product-detail">
              <h2><strong>Kondisi Mobil:</strong> </h2>
              <p><?php echo htmlspecialchars($kondisi); ?></p>
              <ul>
                <li><strong>Tenaga:</strong> <span><?php echo htmlspecialchars($tenaga); ?> </span></li>
                <li><strong>Jumlah Pintu:</strong> <span><?php echo htmlspecialchars($jumlah_pintu); ?></span> </li>
                <li><strong>Jenis Transmisi:</strong> <span><?php echo htmlspecialchars($jenis_transmisi); ?></span> </li>
                <li><strong>Kapasitas Mesin:</strong> <span><?php echo htmlspecialchars($kapasitas_mesin); ?></span> </li>
                <li><strong>Bahan Bakar:</strong> <span><?php echo htmlspecialchars($bahan_bakar); ?></span> </li>
              </ul>
            </div>
            <!-- Tombol Sewa Sekarang dengan id mobil dan nama sebagai parameter URL -->
            <a href="form.php?car_id=<?php echo $car_id; ?>&nama_mobil=<?php echo urlencode($nama_mobil); ?>&harga=<?php echo $harga; ?>">Rent Now</a>
          </div>
        </div>
    <?php
      }
    } else {
      echo "0 hasil";
    }
    ?>
  </section>

  <footer>
    <div>
      <span>Copyright © 2024 All Rights Reserved</span>
      <span class="link">
        <a href="index.php">Home</a>
        <a href="contact.php">Contact</a>
      </span>
    </div>
  </footer>

</body>
</html>