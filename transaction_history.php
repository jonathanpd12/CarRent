<?php
  require_once("php/config.php");
  require_once("php/status_pengguna.php");

  // Tangkap nilai username pengguna
  $username = $_SESSION["user"]["username"];

  // Buat query SQL untuk mengambil data transaksi berdasarkan username pengguna
  $sql = "SELECT * FROM pemesanan WHERE username = :username";

  // Persiapkan statement SQL menggunakan PDO
  $stmt = $db->prepare($sql);

  // Bind parameter
  $stmt->bindParam(':username', $username, PDO::PARAM_STR);

  // Eksekusi query
  $stmt->execute();

  // Ambil hasil query
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Transaction History</title>
    <link rel="stylesheet" href="css/transaction_history.css"/>
    <!-- <link rel="stylesheet" href="style.css"> -->
    
    <!-- Fontawesome Link for Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
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

  <section class="transaction-history" id="transaction-history">
      <h2>Transaction History</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Car Name</th>
                <th>Phone Number</th>
                <th>Start Date</th>
                <th>Rental Duration</th>
                <th>Total Price</th>
            </tr>
            <?php
            if (!empty($result)) {
                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>" . $_SESSION["user"]["name"] . "</td>";
                    echo "<td>" . $row['nama_mobil'] . "</td>";
                    echo "<td>" . $row['no_hp'] . "</td>";
                    echo "<td>" . $row['tanggal_mulai'] . "</td>";
                    echo "<td>" . $row['durasi_sewa'] . " hari</td>";
                    echo "<td>Rp " . number_format($row['total_harga'], 0, ",", ".") . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Tidak ada transaksi.</td></tr>";
            }
            ?>
        </table>
  </section>
  </body>
</html>