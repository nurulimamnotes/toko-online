<?php
include "../include/lib.php";
error_reporting(0);
$pass=md5($_POST[password]);

$login=mysql_query("SELECT * FROM user WHERE id_user='$_POST[username]' AND password='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  session_register("passuser");
  session_register("leveluser");

  $_SESSION[passuser] = $r[password];
  $_SESSION[leveluser]= $r[level];
  header('location:admin.php?mod=home');
}
else{
  echo "<script>window.alert('Username atau Password Salah!!!');
        window.location=('index.php')</script>";
}
?>
