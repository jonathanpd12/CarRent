<?php
  session_start();

  // Periksa apakah pengguna telah login
  if (!isset($_SESSION["user"])) {
      // Jika belum, alihkan ke halaman login atau pendaftaran
      header("Location: sign-in_sign-up.php");
      exit; // Penting untuk menghentikan eksekusi setelah mengalihkan header
  }

  // Tangkap nilai-nilai dari session
  $user_name = $_SESSION["user"]["name"];
  $username = $_SESSION["user"]["username"]; // Ambil nilai username dari session
  $logged_in = true;

  // Cek apakah tombol logout ditekan
  if (isset($_POST["logout"])) {
      // Hapus seluruh session
      session_destroy();
      // Alihkan kembali ke halaman index.php
      header("Location: index.php");
      exit; // Penting untuk menghentikan eksekusi setelah mengalihkan header
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Now Form</title>
    <link rel="stylesheet" href="css/form.css"/>
    
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
</head>
<body>
<header>
      <nav class="navbar">
        <h2 class="logo"><a href="#">CarRent</a></h2>
        <input type="checkbox" id="menu-toggler" />
        <label for="menu-toggler" id="hamburger-btn">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="white"
            width="24px"
            height="24px"
          >
            <path d="M0 0h24v24H0z" fill="none" />
            <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z" />
          </svg>
        </label>
        <ul class="all-links">
          <li><a href="index.php" class="link">Home</a></li>
          <li><a href="cars.php" class="link">Cars</a></li>
          <li><a href="services.php" class="link">Services</a></li>
          <li><a href="about.php" class="link">About</a></li>
          <li><a href="contact.php" class="link">Contact</a></li>
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

<?php
  // Ambil nilai-nilai dari query string
  $nama_mobil = $_GET['nama_mobil'];
  $harga = $_GET['harga'];
?>
    <div class="container">
    <h2>Payment Form</h2>
    <form action="php/data-sewa.php" method="post">
        
        <label for="nama_mobil">Nama Mobil:</label>
        <input type="text" name="nama_mobil" value="<?php echo $nama_mobil; ?>" readonly><br><br>

        <!-- Field tersembunyi untuk menyimpan ID mobil -->
        <input type="hidden" name="nama_mobil" value="<?php echo $nama_mobil; ?>">
        
        <!-- input tersembunyi untuk menyimpan data username -->
        <input type="hidden" name="username" value="<?php echo $username; ?>">
        
        <!-- Input untuk harga per hari (readonly) -->
        <label for="harga_per_hari">Harga per Hari:</label>
        <input type="text" id="harga" name="harga" value="<?php echo $harga; ?>" readonly><br><br>
        
        <!-- Input untuk nama lengkap (required) -->
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required><br><br>
        
        <!-- Input untuk nomor hp (required) -->
        <label for="nomor_hp">Nomor HP:</label>
        <input type="tel" id="no_hp" name="no_hp" required><br><br>
        
        <!-- Input untuk tanggal mulai sewa (required) -->
        <label for="tanggal_mulai">Tanggal Mulai Sewa:</label>
        <input type="date" id="tanggal_mulai" name="tanggal_mulai" required><br><br>
        
        <!-- Input untuk durasi sewa (required) -->
        <label for="durasi_sewa">Durasi Sewa (hari):</label>
        <input type="number" id="durasi_sewa" name="durasi_sewa" min="1" required><br><br>
        
        <!-- Input untuk total harga (readonly) -->
        <label for="total_harga">Total Harga:</label>
        <input type="text" id="total_harga" name="total_harga" readonly><br><br>
        
        <input type="submit" value="Confirm Payment">

    </form>
    </div>
   
    <!-- Script untuk menghitung total harga secara otomatis -->
    <script>
        document.getElementById('durasi_sewa').addEventListener('input', function() {
            var hargaPerHari = document.getElementById('harga').value; 
            var durasiSewa = document.getElementById('durasi_sewa').value;
            var totalHarga = hargaPerHari * durasiSewa;
            document.getElementById('total_harga').value = totalHarga;
        });
    </script>
    
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
