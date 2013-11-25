<?php
include "include/lib.php";
error_reporting(0);
$login=mysql_query("SELECT * FROM pengguna WHERE username='$_POST[username]' AND password='$_POST[password]'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  session_register("passuser");
  session_register("iduser");

  $_SESSION[passuser] = $r[password];
  $_SESSION[iduser]= $r[id];
  header('location:index.php?v=order');
}
else{
  echo "<script>window.alert('Username atau Password Salah!!!');
        window.location=('login.php')</script>";
}
?>
