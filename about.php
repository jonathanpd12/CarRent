<?php
  require_once("php/status_pengguna.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CarRent</title>
  <link rel="stylesheet" href="css/about.css" />

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

  <section class="about" id="about">
    <h2>About Us</h2>
    <p>
      Explore our extensive history in the car rental industry and learn about
      our commitment to providing top-notch services.
    </p>
    <div class="row company-info">
      <h3>Our Story</h3>
      <p>
        Discover the remarkable journey we've embarked on, offering reliable
        and high-quality car rental services for more than a decade. Our
        dedication to customer satisfaction and superior vehicles has made us
        a trusted name in the industry. Over the years, we have grown from a small startup to a globally recognized brand,
        serving millions of customers worldwide. Our commitment to innovation, reliability, 
        and affordability has earned us the trust and loyalty of travelers everywhere.
      </p>
    </div>
    <div class="row mission">
      <h3>Our Mission</h3>
      <p>
        Here at CarRent, our mission is clear: to simplify the car rental
        process and ensure that every customer has a seamless and enjoyable
        experience. We strive to provide affordable and convenient
        transportation solutions for all travelers. We believe that transportation should be accessible to all, 
        which is why we offer a wide range of vehicles at competitive prices. 
        Our mission is to provide convenient and affordable transportation solutions, 
        empowering travelers to explore the world with confidence.
      </p>
    </div>
    <div class="row vision">
      <h3>Our Vision</h3>
      <p>
        Our vision is to be the premier choice for car rentals worldwide,
        known for our exceptional service, diverse vehicle options, and
        competitive pricing. We aspire to empower travelers to explore the
        world with confidence and ease. We are committed to expanding our reach,
         offering our services in new markets and introducing innovative features to enhance the customer experience. 
         Our vision is to be the first choice for travelers everywhere, 
         known for our exceptional service, diverse fleet, and unbeatable value.
      </p>
    </div>

    <div class="row team">
      <h3>Our Team</h3>
      <div class="row team">
        <div class="team-member">
          <div class="team-info">
            <h4>Jonathan Pratama Dinatha</h4>
            <p>Founder and<br>CEO</p>
            <img src="images/jujutsu.jpg" alt="photo" />
            <p>CEO - CarRent</p>
            <div class="social-icons">
              <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
              <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
              <a href="mailto:jonathan@carrent.com"><i class="far fa-envelope"></i></a>
            </div>
          </div>
        </div>

        <div class="team-member">
          <div class="team-info">
            <h4>Rangga</h4>
            <p><br>Rental<br> Specialist</p>
            <img src="images/jujutsu.jpg" alt="photo" />
            <p>CEO - CarRent</p>
            <div class="social-icons">
              <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
              <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
              <a href="mailto:jonathan@carrent.com"><i class="far fa-envelope"></i></a>
            </div>
          </div>
        </div>

        <div class="team-member">
          <div class="team-info">
            <h4>Amelda Malia Hermawan</h4>
            <p>Customer Service Representative</p>
            <img src="images/jujutsu.jpg" alt="photo" />
            <p>CEO - CarRent</p>
            <div class="social-icons">
              <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
              <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
              <a href="mailto:jonathan@carrent.com"><i class="far fa-envelope"></i></a>
            </div>
          </div>
        </div>


        <div class="team-member">
          <div class="team-info">
            <h4>Susanti Kurmilasari</h4>
            <p>Operations Manager</p>
            <img src="images/jujutsu.jpg" alt="photo" />
            <p>CEO - CarRent</p>
            <div class="social-icons">
              <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
              <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
              <a href="mailto:jonathan@carrent.com"><i class="far fa-envelope"></i></a>
            </div>
          </div>
        </div>

        <div class="team-member">
          <div class="team-info">
            <h4>Deska Phanosthy Hutagalung</h4>
            <p>Marketing Coordinator</p>
            <img src="images/jujutsu.jpg" alt="photo" />
            <p>CEO - CarRent</p>
            <div class="social-icons">
              <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
              <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
              <a href="mailto:jonathan@carrent.com"><i class="far fa-envelope"></i></a>
            </div>
          </div>
        </div>
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