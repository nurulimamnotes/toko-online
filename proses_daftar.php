<?php
include ("koneksi.php");
//tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];

//simpan data ke database
$query = mysql_query("INSERT into pengguna values('', '$username', '$password', '$nama', '$email', '$alamat', '$nohp')") or die(mysql_error());
if ($query) {
	header('location:signup.php?message=success');
}
?>