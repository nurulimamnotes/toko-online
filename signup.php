<html>
<head>
<title>Halaman Pendaftaran</title>
</head>
<body>
<div style="width:30%; float:left; margin: 50px auto 0 35%">
<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Pendaftaran Berhasil</h3>
<p>Silahkan Masuk Ke Halaman <a href="login.php">Member</a></p>';
}
?>
<h1 style="text-align:center">Pendaftaran</h1>
<form name="input_data" action="proses_daftar.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>Username</td>
        	<td>:</td>
        	<td><input type="text" name="username" maxlength="20" required="required" /></td>
        </tr>
    	<tr>
        	<td>Password</td>
        	<td>:</td>
        	<td><input type="password" name="password" maxlength="20" required="required" /></td>
        </tr>
    	<tr>
        	<td>Nama Lengkap</td>
        	<td>:</td>
        	<td><input type="text" name="nama" maxlength="100" required="required" /></td>
        </tr>
    	<tr>
        	<td>Email</td>
        	<td>:</td>
        	<td><input type="email" name="email" required="required" /></td>
        </tr>
    	<tr>
        	<td>Alamat Lengkap</td>
        	<td>:</td>
        	<td><input type="text" name="alamat" required="required" /></td>
        </tr>
    	<tr>
        	<td>Nomor HP</td>
        	<td>:</td>
        	<td><input type="text" name="nohp" maxlength="14" required="required" /></td>
        </tr>
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Daftar" /></td>
        </tr>
    </tbody>
</table>
</form>
<p>Sudah punya akun? Silahkan <a href="login.php">login</a></p>
</div>
</body>
</html>