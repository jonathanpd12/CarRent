<?php
  require_once("php/status_pengguna.php");
  require_once("php/config.php");
  
  // Query untuk mengambil data mobil dari tabel detail
  $query1 = "SELECT * FROM sedan";
  $stmt1 = $db->query($query1);

  $query2 = "SELECT * FROM hatchback";
  $stmt2 = $db->query($query2);

  $query3 = "SELECT * FROM suv";
  $stmt3 = $db->query($query3);

  $query4 = "SELECT * FROM mpv";
  $stmt4 = $db->query($query4);

  $query5 = "SELECT * FROM cc";
  $stmt5 = $db->query($query5);

  $query6 = "SELECT * FROM co";
  $stmt6 = $db->query($query6);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CarRent</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/cars.css" />

    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
  </head>
  
  <body>
    <header>
      <nav class="navbar">
        <h2 class="logo"><a href="#">CarRent</a></h2>
        
        <div class="search-container">
          <input type="text" id="searchInput" placeholder="Search for cars">
        </div>


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

    <section class="cars">
    <h2 class="sedan">Choose Your Sedan's</h2>
            <div class="cards">
                <?php 
                // Periksa apakah query berhasil dijalankan
                if ($stmt1) {
                while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) : ?>
                    <div class="card">
                        <img src="<?php echo $row1['gambar_sedan']; ?>" alt="<?php echo $row1['nama_sedan']; ?>">
                        <h2><?php echo $row1['nama_sedan']; ?></h2>
                        <h3><?php echo $row1['transmisi_sedan']; ?></h3>
                        <p><?php echo 'Harga: Rp ' . number_format($row1['harga_sedan'], 0, ',', '.'); ?></p>
                        <a href="car-detail.php?id_mobil=<?php echo $row1['id_mobil']; ?>">Details</a>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
        <?php
          } else {
              // Tampilkan pesan jika query tidak berhasil dijalankan
              echo "Failed to fetch car data.";
          }
        ?>

        <section class="cars1">
        <h2 class="hatchback">Choose Your Hatchback's</h2>
            <div class="cards">
                <?php 
                // Periksa apakah query berhasil dijalankan
                if ($stmt2) {
                while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) : ?>
                    <div class="card">
                        <img src="<?php echo $row2['gambar_hb']; ?>" alt="<?php echo $row2['nama_hb']; ?>">
                        <h2><?php echo $row2['nama_hb']; ?></h2>
                        <h3><?php echo $row2['transmisi_hb']; ?></h3>
                        <p><?php echo 'Harga: Rp ' . number_format($row2['harga_hb'], 0, ',', '.'); ?></p>
                        <a href="car-detail.php?id_mobil=<?php echo $row2['id_mobil']; ?>">Details</a>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
        <?php
          } else {
              // Tampilkan pesan jika query tidak berhasil dijalankan
              echo "Failed to fetch car data.";
          }
          ?>

       <section class="cars1">
       <h2 class="hatchback">Choose Your SUV's</h2>
            <div class="cards">
                <?php 
                // Periksa apakah query berhasil dijalankan
                if ($stmt3) {
                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) : ?>
                    <div class="card">
                        <img src="<?php echo $row3['gambar_suv']; ?>" alt="<?php echo $row3['nama_suv']; ?>">
                        <h2><?php echo $row3['nama_suv']; ?></h2>
                        <h3><?php echo $row3['transmisi_suv']; ?></h3>
                        <p><?php echo 'Harga: Rp ' . number_format($row3['harga_suv'], 0, ',', '.'); ?></p>
                        <a href="car-detail.php?id_mobil=<?php echo $row3['id_mobil']; ?>">Details</a>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
        <?php
          } else {
              // Tampilkan pesan jika query tidak berhasil dijalankan
              echo "Failed to fetch car data.";
          }
          ?>

<section class="cars1">
<h2 class="hatchback">Choose Your MPV's</h2>
            <div class="cards">
                <?php 
                // Periksa apakah query berhasil dijalankan
                if ($stmt4) {
                while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) : ?>
                    <div class="card">
                        <img src="<?php echo $row4['gambar_mpv']; ?>" alt="<?php echo $row4['nama_mpv']; ?>">
                        <h2><?php echo $row4['nama_mpv']; ?></h2>
                        <h3><?php echo $row4['transmisi_mpv']; ?></h3>
                        <p><?php echo 'Harga: Rp ' . number_format($row4['harga_mpv'], 0, ',', '.'); ?></p>
                        <a href="car-detail.php?id_mobil=<?php echo $row4['id_mobil']; ?>">Details</a>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
        <?php
          } else {
              // Tampilkan pesan jika query tidak berhasil dijalankan
              echo "Failed to fetch car data.";
          }
          ?>

<section class="cars1">
<h2 class="hatchback">Choose Your City Cars's</h2>
            <div class="cards">
                <?php 
                // Periksa apakah query berhasil dijalankan
                if ($stmt5) {
                while ($row5 = $stmt5->fetch(PDO::FETCH_ASSOC)) : ?>
                    <div class="card">
                        <img src="<?php echo $row5['gambar_cc']; ?>" alt="<?php echo $row5['nama_cc']; ?>">
                        <h2><?php echo $row5['nama_cc']; ?></h2>
                        <h3><?php echo $row5['transmisi_cc']; ?></h3>
                        <p><?php echo 'Harga: Rp ' . number_format($row5['harga_cc'], 0, ',', '.'); ?></p>
                        <a href="car-detail.php?id_mobil=<?php echo $row5['id_mobil']; ?>">Details</a>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
        <?php
          } else {
              // Tampilkan pesan jika query tidak berhasil dijalankan
              echo "Failed to fetch car data.";
          }
          ?>

<section class="cars1">
  <div class="crossover">
  <h2 class="hatchback">Choose Your Crossover's</h2>
            <div class="cards">
                <?php 
                // Periksa apakah query berhasil dijalankan
                if ($stmt6) {
                while ($row6 = $stmt6->fetch(PDO::FETCH_ASSOC)) : ?>
                    <div class="card">
                        <img src="<?php echo $row6['gambar_co']; ?>" alt="<?php echo $row6['nama_co']; ?>">
                        <h2><?php echo $row6['nama_co']; ?></h2>
                        <h3><?php echo $row6['transmisi_co']; ?></h3>
                        <p><?php echo 'Harga: Rp ' . number_format($row6['harga_co'], 0, ',', '.'); ?></p>
                        <a href="car-detail.php?id_mobil=<?php echo $row6['id_mobil']; ?>">Details</a>
                    </div>
                <?php endwhile; ?>
            </div>
  </div>
        </section>
        <?php
          } else {
              // Tampilkan pesan jika query tidak berhasil dijalankan
              echo "Failed to fetch car data.";
          }
          ?>


<script>
      $(document).ready(function() {
        $('#searchInput').on('input', function() {
          var searchText = $(this).val().toLowerCase();
          $('.card').each(function() {
            var carName = $(this).find('h2').text().toLowerCase(); 
            if (carName.includes(searchText)) {
              $(this).show(); 
            } else {
              $(this).hide(); 
            }
          });
          // Show or hide section headings based on search results
          $('h2.sedan, h2.hatchback, h2.suv, h2.mpv, h2.citycars, h2.crossover').each(function() {
            var section = $(this).closest('section');
            if (section.find('.card:visible').length > 0) {
              $(this).show(); 
            } else {
              $(this).hide(); 
            }
          });
        });
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