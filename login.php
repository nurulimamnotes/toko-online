<?php
session_start();
?>
<html>
<head>
<title>Masuk Ke Halaman Member</title>
</head>
<body>
<div style="width:30%; float:left; margin: 50px auto 0 35%">
<h1 style="text-align:center">Masuk Halaman Member</h1>
<form method="POST" action="masuk.php">
<table>
<tr><td>Username</td><td> : <input type="text" name="username"></td></tr>
<tr><td>Password</td><td> : <input type="password" name="password"></td></tr>
<tr><td colspan="2"><input type="submit" value="Login"></td></tr>
</table>
</form>
</div>
</body>
</html>