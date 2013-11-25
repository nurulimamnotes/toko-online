<div class="BigContent">
<div class="RightContent">
<h1 class="Judul" style="margin-left:15px">Produk terbaru</h1>
<?php
	$sql = mysql_query("SELECT * FROM product limit 1,12") or die ("Query gagal dengan error: ".mysql_error());
	while($data=mysql_fetch_array($sql)){ ?>
<div class="produk">
	<a href="?v=produk&id=<?php echo $data['id']; ?>">
		<img title="<?php echo $data['product_name']; ?>" class="FotoProduk" src="foto/<?php echo $data['image']; ?>" height="110px" width="200px" />
	</a>
	<br class="clearfloat" />
	<div class="KotakKet">
	<a class="pesanprod" href="input.php?input=add&id=<?php echo $data['id']; ?>"><img src="images/add.png" /></a>
	<a class="detprod" href="index.php?v=cart"><img src="images/detail.png" /></a>
	</div>
</div>
<?php } ?>

<span class="tombolku"><a href="index.php?v=semua_produk">Lihat Semua Produk</a></span>