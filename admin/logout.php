<?php
  session_start();
  session_destroy();
  echo "<script>window.alert('Kamu telah berhasil keluar dari sistem administrator');
        window.location=('../index.php')</script>";
?>
