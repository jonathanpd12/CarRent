<?php
  require_once("php/status_pengguna.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Services</title>
    <link rel="stylesheet" href="css/services.css" />

    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
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

    <section class="services" id="services">
      <h2>Our Services</h2>
      <p>Discover the benefits of renting with us.</p>
      <ul class="cards">
        <li class="card">
          <img src="images/icon/Wide Selection.png" alt="img" />
          <h3>Wide Selection</h3>
          <p>
            Choose from a variety of vehicles to suit your needs and
            preferences.
          </p>
        </li>
        <li class="card">
          <img src="images/icon/24-7 Availability.png" alt="img" />
          <h3>24/7 Availability</h3>
          <p>
            Rent a car anytime, day or night, with our round-the-clock service.
          </p>
        </li>
        <li class="card">
          <img src="images/icon/Affordable Rates.png" alt="img" />
          <h3>Affordable Rates</h3>
          <p>
            Enjoy competitive and transparent pricing for your rental needs.
          </p>
        </li>
        <li class="card">
          <img src="images/icon/Insurance Coverage.png" alt="img" />
          <h3>Insurance Coverage</h3>
          <p>
            Drive with peace of mind knowing you're covered by our comprehensive
            insurance.
          </p>
        </li>
        <li class="card">
          <img src="images/icon/fuel efficiency 2.png" alt="img" />
          <h3>Fuel Efficiency</h3>
          <p>
            Experience fuel-efficient vehicles to save on your travel expenses.
          </p>
        </li>
        <li class="card">
          <img src="images/icon/GPS Navigation.png" alt="img" />
          <h3>GPS Navigation</h3>
          <p>
            Explore confidently with GPS navigation available in our vehicles.
          </p>
        </li>
      </ul>
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
