<?php
  require_once("php/config.php");
  require_once("php/status_pengguna.php");

  // Tangkap nilai username pengguna
  $username = $_SESSION["user"]["username"];

  // Buat query SQL untuk mengambil data pengguna berdasarkan username
  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = $db->query($sql);

  // Periksa apakah data pengguna ditemukan
  if ($result->rowCount() > 0) {
      // Ambil data pengguna dari hasil query
      $row = $result->fetch(PDO::FETCH_ASSOC);
      $user_name = $row["name"];
      $user_username = $row["username"];
      $user_email = $row["email"];
  } else {
      echo "Data pengguna tidak ditemukan.";
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Profile</title>
    <link rel="stylesheet" href="css/profile.css">
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

    <section class="profile">
    <div class="profile-card">
        <h2 class="profile-title">My Profile</h2>
        <div class="profile-info">
            <form action="" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $user_name; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo $user_username; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $user_email; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="********" readonly>
            </div>
            <div class="form-group">
                <a href="edit-profile.php" class="btn btn-primary">Edit Profile</a>
            </div>
            <div class="form-group">
                <a href="edit_profile.php" class="btn btn-primary">Change Password</a>
            </div>
            </form>
        </div>
    </div>
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
