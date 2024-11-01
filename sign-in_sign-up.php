<?php
  session_start();

  // Memanggil file config.php untuk koneksi ke database
  require_once("php/config.php");

  // Mengecek apakah pengguna sudah masuk atau belum
  $logged_in = isset($_SESSION['user']);
  $error_message = ""; // Inisialisasi pesan kesalahan

  // SIGN-UP  
  if (isset($_POST['register'])) {
    // Mengambil dan membersihkan data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Mengenkripsi password
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // Menyiapkan query untuk menyimpan data ke database
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // Bind parameter ke query
    $params = array(
      ":name" => $name,
      ":username" => $username,
      ":password" => $password,
      ":email" => $email
    );

    // Menjalankan query untuk menyimpan data ke database
    $saved = $stmt->execute($params);

    // Jika query simpan berhasil, alihkan ke halaman sign-in_sign-up.php
    if ($saved) {
      header("Location: sign-in_sign-up.php");
      exit; // Penting untuk menghentikan eksekusi setelah mengalihkan header
    } else {
      $error_message = "Gagal menyimpan data. Silakan coba lagi.";
    }
  }

  // SIGN IN
  if (isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username";
    $stmt = $db->prepare($sql);

    $params = array(
      ":username" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
      if (password_verify($password, $user["password"])) {
        session_start();
        $_SESSION["user"] = $user;
        header("Location: index.php");
      } else {
        $error_message = "Username atau password salah";
      }
    } else {
      $error_message = "Username atau password salah";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Sign-In dan Sign-Up</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/sign.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  <!-- Unicons -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  
  <!-- Boxicons CSS -->
  <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
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

  <div class="container">
    <input type="checkbox" id="flip" />
    <div class="cover">
      <div class="front">
        <img src="images/cars1.jpg" alt="" />
        <div class="text">
          <!-- <span class="text-1">Every new friend is a <br /> -->
            <!-- new adventure</span> -->
          <!-- <span class="text-2">Let's get connected</span> -->
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="images/cars1.jpg" alt="">
        <div class="text">
          <!-- <span class="text-1">Complete miles of journey <br /> -->
            <!-- with one step</span> -->
          <!-- <span class="text-2">Let's get started</span> -->
        </div>
      </div>
    </div>

    <!-- SIGN-IN -->
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Sign-In</div>

          <!-- Tambahkan kode untuk menampilkan pesan kesalahan -->
          <?php if (!empty($error_message)) : ?>
            <div class="error-message"><?php echo $error_message; ?></div>
          <?php endif; ?>

          <form action="#" method="POST">
          <div class="input-boxes">
            <div class="input-box">
              <i class="fas fa-user"></i>
              <input class="form-control" type="text" name="username" placeholder="Enter your username"/>
              <!-- <i class="error error-icon fas fa-exclamation-circle"></i> -->
            </div>
    
            <div class="input-box">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Enter your password"/>
              <i class="bx bx-hide show-hide"></i>
              <!-- <i class="error error-icon fas fa-exclamation-circle"></i> -->
            </div>
            
              <div class="button input-box">
                <input type="submit" name="login" value="Sign-In" />
              </div>

              <div class="text sign-up-text">
                Don't have an account? <label for="flip">Sign-Up now</label>
              </div>
            </div>
          </form>
        </div>

        <!-- SIGN UP -->
        <div class="signup-form">
          <div class="title">Sign-Up</div>

          <!-- Tambahkan kode untuk menampilkan pesan kesalahan -->
          <?php if (!empty($error_message)) : ?>
            <div class="error-message"><?php echo $error_message; ?></div>
          <?php endif; ?>

          <form action="#" method="POST">
            <div class="input-boxes">

              <div class="input-box">
                <i class="fas fa-user"></i>
                <input class="form-control" type="text" name="name" placeholder="Enter your name" required />
              </div>

              <div class="input-box">
                <i class="fas fa-user"></i>
                <input class="form-control" type="text" name="username" placeholder="Enter your username" required />
              </div>

              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input class="form-control" type="text" name="email" placeholder="Enter your email" required />
              </div>

              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input class="form-control" type="password" name="password" placeholder="Enter your password" required />
                <i class="bx bx-hide show-hide"></i>
              </div>

              <div class="button input-box">
                <input type="submit" name="register" value="Sign-Up" />
              </div>

              <div class="text sign-up-text">
                Already have an account? <label for="flip">Sign-In now</label>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  <script src="js/sign.js"></script>
</body>
</html>