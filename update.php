<?php
$id = $_GET['id'];
$jml = $_GET['jml'];
$harga = mysql_query("SELECT barang.harga from barang, pesan
where barang.id=pesan.idproduk and pesan.nomor=$id");
$h = mysql_fetch_array($harga);
$harganya = $h['harga'];
$hargabaru = $harganya*$jml;
$update = mysql_query("UPDATE order_product set jumlah=$jml, harga=$hargabaru where nomor=$id");
if($update){
    $ambil = mysql_query("select harga from pesan where nomor=$id");
    $a = mysql_fetch_array($ambil);
    echo $a['harga'];
}else{
    echo "error";
}
?>
