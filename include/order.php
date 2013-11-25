  
<div class="BigContent">
<div class="RightContent">
	<h2 class="Judul">Form Pemesanan</h2>
<?php
if (ISSET($_SESSION['iduser'])){
	$sql = mysql_query("SELECT * from pengguna where id='$_SESSION[iduser]'");
	while ($r=mysql_fetch_array($sql)){
		echo"<form action='input.php?input=inputform' method='post'>
	<table>
		<tr>
			<td>Nama</td>
			<td><input type='text' name='name' value='$r[nama]' /></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type='text' name='email' value='$r[email]' /></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name='address' cols='40' rows='7'>$r[alamat]</textarea></td>
		</tr>
		<tr>
			<td>No HP</td>
			<td><input type='text' name='telp' value='$r[nohp]' /></td>
		</tr>
		<tr>
			<td></td>
			<td><input name='submit' type='submit' value='Order Now'> </td>
		</tr>
	</table>
</form>";
	}
//jika tidak ada session
}else{
echo '<p>Anda Harus <a href="signup.php">Daftar</a> atau <a href="login.php">Masuk</a> Sebelum Melakukan Transaksi.</p>';
}
?>	