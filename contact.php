<?php
  require_once("php/status_pengguna.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Contact - CarRent</title>
    <link rel="stylesheet" href="css/contact.css" />
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

    <section class="contact" id="contact">
      <h2>Contact Us</h2>
      <p>Get in touch with CarRent for inquiries or bookings.</p>
      <div class="row">
        <div class="col information">
          <div class="contact-details">
            <p>
              <i class="fas fa-map-marker-alt"></i> Jl. Jenderal Sudirman No. 30,
              Kota Palangka Raya, Kalimantan Tengah 74874
            </p>            
            <p><i class="fas fa-envelope"></i> carrental@gmail.com</p>
            <p><i class="fas fa-phone"></i> 081352742811</p>
            <p>
              <i class="fas fa-clock"></i> Monday - Friday: 8:00 AM - 23:59 PM
            </p>
            <p><i class="fas fa-clock"></i> Saturday: 10:00 AM - 18:00 PM</p>
            <p><i class="fas fa-clock"></i> Sunday: Closed</p>
            <p><i class="fas fa-globe"></i> www.carrent.com</p>
          </div>
        </div>
        <div class="col form">
          <form>
            <input type="text" placeholder="Name*" required />
            <input type="email" placeholder="Email*" required />
            <textarea placeholder="Message*" required></textarea>
            <button id="submit" type="submit">Send Message</button>
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
