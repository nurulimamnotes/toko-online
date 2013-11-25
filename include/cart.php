<div class="BigContent">
	<div class="RightContent">
		<h1 class="Judul">Shopping Cart</h1>
		<div class="KetProd">
	<table class="TableCart" width="100%" cellspacing="0" cellpadding="0" border="0" style="border-top: 1px dotted #0; border-bottom: 1px dotted #0;">
					<tr><th><center>No</center></th>
					<th><center>Nama Produk</center></th>
					<th><center>Banyak Produk</center></th>
					<th><center>Harga Produk</center></th>
					<th><center>Hapus Produk</center></th>
					</tr>

<?php
$idtransaksi = $_SESSION['cart'];
$keranjang = mysql_query("SELECT * FROM keranjang, product WHERE id_session='$sid' AND keranjang.id_product=product.id");
$subtotal = 0;
while($k = mysql_fetch_array($keranjang)){
	$no++;
	$tengah = $k['price'] * $k['qty'];
    echo "<tr>
    <td align='center'>$no</td>
    <td>".$k['product_name']."</td>";
    echo "<td align='center'>".$k['qty']."</td>
    <td>Rp. <span id=\"price".$k['id_product']."\">".$k['price']."</span>&nbsp;</td>
	<td><center><a href='input.php?input=delete&id=$k[id_keranjang]'>Hapus</a></center></td>
	</tr>";
	$kuantiti = $tengah;
    $subtotal = $subtotal + $tengah;
}
echo "<tr>
					<th></th>
					<th></th>
					<th></th>
<th><center><b>Total Belanja</b></center></th>
<th><center><b>Rp. <span id=subtotal>$subtotal</span></b></center></th></tr>";
?>
			</table>
			<span class="tombolku"><a href="?v=order">Selesai</a></span>
			<span class="tombolku"><a href="index.php">Lanjutkan Berbelanja</a></span>
		</div>