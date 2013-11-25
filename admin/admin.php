<?php
error_reporting(0);
session_start();
if (empty($_SESSION[namauser]) AND empty($_SESSION[passuser])){
  echo "<link href='css/style.css' rel='stylesheet' type='text/css'>
 <center>Silahkan Login terlebih dahulu <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>

<html>
<head>
<title>Albantani Online Shop Administrator</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="nicedit/nicEdit.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
        <script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
        <style type="text/css">
            @import "media/css/demo_table_jui.css";
            @import "media/themes/smoothness/jquery-ui-1.8.4.custom.css";
        </style>
        
        <style>
            *{
                font-family: arial;
            }
        </style>
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function(){
                $('#datatables').dataTable({
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[2, "desc"]],
                    "bJQueryUI":false
                });
                $('#pengelola').dataTable({
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[2, "desc"]],
                    "bJQueryUI":false
                });
            })
            
        </script>
<script type="text/javascript">
	bkLib.onDomLoaded(function(){
		nicEditors.allTextAreas(({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']})) });
</script>
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
						<span class="KetCart">Administrator</span>
					</div>
				</div>
			</div>
			<br class="clearfloat" />
	<div class="BigCOntent">
		<div class="LeftContent">
			<div id="navigation">
			  <ul class="top-level">
				<li><a href="?mod=home">Beranda</a></li>
				<li><a href="?mod=product">Produk</a></li>
				<li><a href="?mod=category">Kategori</a></li>
				<li><a href="?mod=report">Report</a></li>
				<li><a href=logout.php>Keluar</a></li>
			  </ul>
			</div>
		</div>
		<div class="RightContent">
			<?php 
				if ($_GET[mod]=='home'){
				  echo "<h1 class='Judul'>Selamat Datang Di Halaman Administrator</h1>
				<p>Disini anda bisa mengupdate, menambahkan, menghapus produk dan kategori.</p> <p>Anda juga bisa membuat sebuah laporan penjualan dengan menggunakan menu di sebelah kiri.</p>";
				}
				//Add Kategori
				elseif ($_GET[mod]=='category'){
					require_once "modul/mod_kategori.php";
					}
				//Add Product
				elseif ($_GET[mod]=='product'){
					require_once "modul/mod_produk.php";
					}
				//Report
				elseif ($_GET[mod]=='report'){
					require_once "modul/report.php";
					}
			?>
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
