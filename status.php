<?php
error_reporting(0);
session_start();
if (empty($_SESSION[iduser]) AND empty($_SESSION[passuser])){
  echo "<link href='admin/css/style.css' rel='stylesheet' type='text/css'>
 <center>Silahkan Login terlebih dahulu <br>";
  echo "<a href=masuk.php><b>LOGIN</b></a></center>";
}
else{
?>
<?php
include ("koneksi.php");
$nama=mysql_query("SELECT * FROM pengguna WHERE nama='$_POST[nama]'");
$id=mysql_query("SELECT * FROM pengguna WHERE id='$_POST[id]'");
$email=mysql_query("SELECT * FROM pengguna WHERE email='$_POST[email]'");
$username=mysql_query("SELECT * FROM pengguna WHERE username='$_POST[username]'");

$ambil=mysql_fetch_array($nama);
?>
<html>
<head>
<title>Albantani Online Member</title>
<link href="admin/css/style.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            @import "admin/media/css/demo_table_jui.css";
        </style>
        
        <style>
            *{
                font-family: arial;
            }
        </style>
</head>
<body>
		<div class="wrap">
			<div class="header">
				<div class="LeftOne">
					<a href="index.php">
					</a>
				</div>
				<div class="RightOne">
					<div class="cart">
						<span class="KetCart">Halaman Member</span>
					</div>
				</div>
			</div>
			<br class="clearfloat" />
	<div class="BigCOntent">
		<div class="LeftContent">
			<div id="navigation">
			  <ul class="top-level">
				<li><a href="index.php">Beranda</a></li>
				<li><a href="index.php?v=promo">Produk</a></li>
				<li><a href="index.php?v=bantuan">Bantuan</a></li>
				<li><a href="index.php?v=hubungi_kami">Hubungi Kami</a></li>
				<li><a href=logout.php>Keluar</a></li>
			  </ul>
			</div>
		</div>
		<div class="RightContent">
<?php
	$sid = session_id();
	$sql = mysql_query("SELECT * FROM pengguna ORDER BY id DESC");
	?>
<table id="datatables" class="TableCart">
	<thead>
	<tr><th><center>No</center></th>
		<th><center>Id</center></th>
		<th>Nama</th>
		<th>Username</th>
		<th>Email</th>
	</tr>
	</thead>
	<tbody>
<?php
	$no = 1;
	while ($r=mysql_fetch_array($sql)){
		echo"<tr><td><center>$no</center</td>
				<td><center>$r[id]</center></td>
				<td>$r[nama]</td>
				<td>$r[username]</td>
				<td>$r[email]</td>
			 </tr>";
	$no++;
	} ?>
	</tbody>
</table>

		</div>
	</div>
				<br class="clearfloat" />
			<div class="footer">
				<p align="center">&copy; <?php echo date('Y') ?> Albantani Online Marketplace | PHP dan MySQL Developed by <a href="http://www.nurulimam.com/">Nurul Imam</a></p>
			</div>
		</div>
	</body>
</html>
<?php
}
?>