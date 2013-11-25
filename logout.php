<?php
  session_start();
  session_destroy();
  echo "<script>window.alert('Kamu telah berhasil keluar dari Halaman Member');
        window.location=('index.php')</script>";
?>
