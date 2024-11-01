<?php
  session_start();

  // Periksa apakah pengguna telah masuk
  if(isset($_SESSION["user"])) {
      $username = $_SESSION["user"]["username"];  // Jika pengguna telah masuk, ambil nama pengguna dari sesi
      $logged_in = true;    // Setel status masuk menjadi true
  } else {
      $logged_in = false;   // Setel status masuk menjadi false jika pengguna belum masuk
  }

  // Cek apakah tombol logout ditekan
  if (isset($_POST["logout"])) {
    session_destroy();              // Hapus seluruh sesi
    header("Location: index.php");  // Alihkan kembali ke halaman index.php setelah logout
    exit;                           // Penting untuk menghentikan eksekusi setelah mengalihkan header
  }
?>