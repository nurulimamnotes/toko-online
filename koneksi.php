<?php
$host_name 	= "localhost";
$user_db 	= "root";
$password_db	= "";
$nama_db	= "tokoonline";

$koneksi = mysql_connect($host_name, $user_db, $password_db);
$database = mysql_select_db($nama_db);

if (!$koneksi){
echo "Koneksi gagal . .";
} else {
if(!$database){
echo "Database tidak ditemukan . .";
}
}
?>