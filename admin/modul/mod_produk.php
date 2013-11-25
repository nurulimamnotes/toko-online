<?php
session_start();
error_reporting(0);
include "include/lib.php";

$mod=$_GET[mod];
$act=$_GET[act];


// Menghapus data
if (isset($mod) AND $act=='hapus'){
  mysql_query("DELETE FROM ".$mod." WHERE id ='$_GET[id]'");
  header('location:admin.php?mod='.$mod);
}


//Add Category
elseif ($mod=='category' AND $act=='input'){
	$insert = mysql_query("INSERT INTO category (id,category) VALUES ('','$_POST[nama_kategori]')");
	if($insert == FALSE){
		echo "<p>Kategori gagal ditambahkan, alesannya:".(mysql_error())."</p>";
		}
	header('location:admin.php?mod='.$mod);
	}
//Category Update
elseif ($mod=='category' AND $act=='update'){
	$update = mysql_query("UPDATE category SET category = '$_POST[nama_kategori]' WHERE id = '$_POST[id]'");
	if($update ==FALSE){
		echo "<p>Update gagal dilakukan karena:".(mysql_error())."</p>";
		}
	header('location:admin.php?mod='.$mod);
	}
	
//Add Product
elseif ($mod=='product' AND $act=='input'){
$lokasi_file 	= $_FILES['fgambar']['tmp_name'];
$tipe_file		= $_FILES['fgambar']['type'];
$nama_file		= $_FILES['fgambar']['name'];

move_uploaded_file($lokasi_file,"../foto/$nama_file");
	$insert = mysql_query("INSERT INTO product (product_name,
												price,
												image,
												id_category,
												deskripsi) 
										VALUES ('$_POST[product_name]',
												'$_POST[price]',
												'$nama_file',
												'$_POST[cat]',
												'$_POST[deskripsi]')");
	header('location:admin.php?mod='.$mod);
}
//Product Update
elseif ($mod=='product' AND $act=='update'){
	$lokasi_file	= $_FILES['fgambar']['tmp_name'];
	$tipe_file		= $_FILES['fgambar']['type'];
	$nama_file		= $_FILES['fgambar']['name'];

	//If the image doesnt change
	if (empty($lokasi_file)){
		mysql_query("UPDATE product SET product_name		= '$_POST[product_name]',
										price		= '$_POST[price]',
										id_category	= '$_POST[cat]',
										deskripsi	= '$_POST[deskripsi]'
									WHERE id = '$_POST[id]'");
	}
	else {
		move_uploaded_file($lokasi_file,"../foto/$nama_file");
		mysql_query("UPDATE product SET product_name= '$_POST[product_name]',
										price		= '$_POST[price]',
										image	= '$nama_file',
										id_category	= '$_POST[cat]',
										deskripsi	= '$_POST[deskripsi]'
									WHERE id = '$_POST[id]'");
	}
	header('location:admin.php?mod='.$mod);
}
?>

<?php
switch($_GET[act]){
	//Tampil Kategori
	default:
	echo"<h2>List Produk</h2>
		<input type=button value='Tambah Produk Baru' onClick=location.href='?mod=product&act=addproduct'>
		<table id='datatables' class='TableCart'>
			<thead><tr><th>no</th><th>Nama Produk</th><th>Harga</th><th>aksi</th></tr></thead><tbody>";
		$sql = mysql_query("SELECT * FROM product ORDER BY id DESC");
		$no = 1;
		while ($r=mysql_fetch_array($sql)){
			echo"<tr><td>$no</td>
					<td>$r[product_name]</td>
					<td>$r[price]</td>
					<td><a href=?mod=product&act=editproduct&id=$r[id]>Edit</a>
						<a href=aksi.php?mod=product&act=hapus&id=$r[id]>Hapus</a>
					</td></tr>";
			$no++;
		}
		echo "</tbody></table>";
		break;
	//Form Add Product
	case "addproduct":
		echo"<h2>Add Product</h2>
			<form enctype='multipart/form-data' method=POST action=aksi.php?mod=product&act=input>
				<table class='TableCart'>
					<tr><td>Nama Barang</td>
						<td><input type=text name=product_name></td>
					</tr>
					<tr><td>Kategori</td><td><select name=cat>";
		$query = mysql_query("SELECT * FROM category");
			while ($t = mysql_fetch_array($query)){
				echo "<option value=$t[id]>$t[category]</option>";
				}
			echo"</select></td><td><a href=?mod=category>Add Category?</a></td>
				</tr>
				<tr><td>Harga</td><td><input type=text name=price></td></tr>
				<tr><td>Deskripsi</td><td><textarea name=deskripsi style='width: 277px; height: 67px;'></textarea></td></tr>
				<tr><td>Gambar</td><td><input type=file name='fgambar' size=40></td>
				<tr><td colspan=2>
						<input type=submit name=submit value=Simpan>
						<input type=button value=Batal onClick=self.history.back()>
					</td>
				</tr>
				</table></form>";
		break;
	//Form Edit Product
	case"editproduct":
		$edit = mysql_query("SELECT * FROM product WHERE id='$_GET[id]'");
		$d = mysql_fetch_array($edit);
		echo"<h2>Edit Product</h2>
			<form method=POST enctype='multipart/form-data' action='aksi.php?mod=product&act=update'>
				<input type=hidden name=id value=$d[id]>
				<table class='TableCart'>
					<tr><td>Nama Barang</td>
						<td><input onfocus=this.value='' type=text name='product_name' value='$d[product_name]'></td>
					</tr>
					<tr><td>Kategori</td><td><select name=cat>";
		$query = mysql_query("SELECT * FROM category");
			while ($t = mysql_fetch_array($query)){
				if($d['id_category'] == $t['id']) {
					echo "<option value='$t[id]' selected>$t[category]</option>";
				} else {
					echo "<option value=$t[id]>$t[category]</option>";
				}
			}
			echo"</select></td><td><a href=?mod=category>Add Category?</a></td>
				</tr>
				<tr><td>Harga</td><td><input onfocus=this.value='' value='$d[price]' type=text name=price></td></tr>
				<tr><td>Deskripsi</td><td><textarea name=deskripsi style='width: 277px; height: 67px;'>$d[deskripsi]</textarea></td></tr>
				<tr><td></td><td><img width=100 src='../foto/$d[image]' /></td></tr>
				<tr><td>Gambar</td><td><input type=file id=fgambar name=fgambar size=40></td>
				<tr><td colspan=2>
						<input type=submit name=submit value=Simpan>
						<input type=button value=Batal onClick=self.history.back()>
					</td>
				</tr>
				</table></form>";
		break;
}
?>