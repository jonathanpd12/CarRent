<!-- 
  [Sistem Informasi Rental Mobil (Car Rent) Berbasis Web]
  KELOMPOK 12 (Pemrograman Web dan Mobile I - Kelas B)
  Nama Anggota Kelompok 12 :
  1. Amelda Malia Hermawan (223020503072)
  2. Susanti Kurmilasari (223020503092)
  3. Jonathan Pratama Dinatha	(223020503102)
  4. Rangga (223020503117)
  5. Deska Phanosthy Hutagalung (223020503133)
 -->

<?php
  require_once("php/status_pengguna.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman HOME - CarRent</title>
  <link rel="stylesheet" href="style.css" />

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

  <section class="homepage" id="home">
    <div class="content">
      <div class="text">
        <h1>Rent Your Dream Car Today</h1>
        <p>
          Discover our wide range of vehicles for your next journey. <br />
          Drive with comfort and style.
        </p>
      </div>
      <a href="#cars">Rent Now</a>
    </div>
  </section>

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

  <section class="cars" id="cars">
    <h2>Our Cars</h2>
    <p>Explore our fleet of quality rental vehicles.</p>
    <ul class="cards">
      <li class="card">
        <img src="images/Sedan.png" alt="img" />
        <h3>Sedan</h3>
        <p>Enjoy a smooth and comfortable ride with our sedan models.</p>
      </li>
      <li class="card">
        <img src="images/Hatchback.png" alt="img" />
        <h3>Hatchback</h3>
        <p>
          Experience practicality and fuel efficiency with our hatchback
          options.
        </p>
      </li>
      <li class="card">
        <img src="images/SUV.png" alt="img" />
        <h3>SUV</h3>
        <p>Travel in style and versatility with our SUV models.</p>
      </li>
      <li class="card">
        <img src="images/MPV.png" alt="img" />
        <h3>MPV</h3>
        <p>Accommodate your family comfortably with our MPV rentals.</p>
      </li>
      <li class="card">
        <img src="images/CityCar.png" alt="img" />
        <h3>City Car</h3>
        <p>
          Navigate urban streets with ease wsith our compact and agile city
          cars.
        </p>
      </li>
      <li class="card">
        <img src="images/Crossover.png" alt="img" />
        <h3>Crossover</h3>
        <p>
          Experience the perfect blend of sedan and SUV with our crossover
          models.
        </p>
      </li>
    </ul>
    <a href="cars.php" class="view-more-button">View More</a>
  </section>

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
        <a href="#">Home</a>
        <a href="contact.php">Contact</a>
      </span>
    </div>
  </footer>
</body>
</html>