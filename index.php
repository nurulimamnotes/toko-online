<!DOCTYPE html>
<html lang="id" dir="ltr">
<head>
<?php include "include/lib.php"; ?>
<title>Mini Market albantani</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
		<link rel="stylesheet" href="styles/layout.css" type="text/css" />
		<link rel="StyleSheet" href="css/style.css" type="text/css" />
		<link rel="StyleSheet" href="css/reset.css" type="text/css" />
<!-- Featured Slider Elements -->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-s3slider.js"></script>
<script type="text/javascript" src="scripts/jquery-s3slider.setup.js"></script>

</head>
<body>
<div class="wrapper row2">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.php">ALBANTANI ONLINE</a></h1>
      <p>Berbelanja di minimarket secara online dengan mudah</p>
    </div>
    <div class="fl_right">
      <form action="#" method="post" id="sitesearch">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" />
          <input type="image" src="images/search.gif" id="search" alt="Search" />
        </fieldset>
      </form>
      <p style="margin:0 0 10px 0;"><a href="login.php">Member Login</a> | <a href="admin/">Admin Login</a></p>
    </div>
  </div>
</div>

<div class="wrapper row3">
  <div id="featured_slide_">
    <ul id="featured_slide_Content">
      <li class="featured_slide_Image"><a href="#"><img src="images/demo/1.jpg" alt="" /></a>
        <div class="introtext">
          <h2>tae kae noi big roll</h2>
          <p>dapatkan promo heboh dengan harga Rp.1 dengan membeli produk dari tae kae noi big roll, syarat dan ketentuan berlaku, info lebih lanjut hubungi alamat email di <a href="mailto:help-albantani@yahoo.com">help-albantani@yahoo.com</a></p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="images/demo/2.jpg" alt="" /></a>
        <div class="introtext">
          <h2>Rinso molto ultra liquid</h2>
          <p>dapatkan promo terbatas untuk rinso molto liquid 800 ml dengan mengunakan e-voucher min.Rp 100.000 info lebih lanjut baca di bantuin</p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="images/demo/3.jpg" alt="" /></a>
        <div class="introtext">
          <h2>pixy</h2>
          <p>dapatkan promo terbaru untuk pembelian kosmetik pixy, hanya untuk 100 org pertama dan anda akan berkesempatan mendapatkan hadiahnya</p>
        </div>
      </li>
    </ul>
  </div> 
</div>

<div class="wrapper row4">
  <div id="quicknav" class="clear">
    <ul>
		  <li><a href="index.php">Home</a></li>
      <li><a href="index.php?v=promo">Promo</a></li>
      <li><a href="">Katagori Produk</a>
      <ul>
      <li><a href="#">Food</a>
      <ul>
      <li><a href="index.php?v=produk&cat=22">Aneka Bumbu Masak</a></li>
      <li><a href="index.php?v=produk&cat=24">Aneka Makanan Ringan</a></li>
      <li><a href="index.php?v=produk&cat=15">Aneka Minuman</a></li>
      <li><a href="index.php?v=produk&cat=32">Aneka Minyak Sayur</a></li>
      <li><a href="index.php?v=produk&cat=23">Aneka Jelly & Permen</a></li>
      <li><a href="index.php?v=produk&cat=16">Aneka Mie Instant</a></li>
      <li><a href="index.php?v=produk&cat=25">Aneka Tepung & Beras</a></li>
      </ul></li>
      <li><a href="#">Non-Food</a>
      <ul>
      <li><a href="index.php?v=produk&cat=17">Baby & Kids</a></li>
      <li><a href="index.php?v=produk&cat=27">Perlengkapan Rumah</a></li>
      </ul></li>
      </ul>
      </li>
      <li><a href="index.php?v=tentang_kami">Tentang Kami</a></li>
		  <li><a href="index.php?v=hubungi_kami">Hubungi Kami</a></li>
		  <li><a href="index.php?v=bantuan">Bantuan</a></li>
		  <li><a href="index.php?v=syarat_dan_ketentuan">Syarat & Ketentuan</a></li>
    </ul>
  </div>
</div>

<div class="wrapper row5">
  <div id="container" class="clear">
    <div id="homepage" class="clear">
      <div class="fl_left">
          <?php 
include "include/top.php";
	$v = $_GET['v'];
	if($v == 'produk') {
		require_once "include/product.php";
	} elseif ($v == 'cart') {
		require_once "include/cart.php";
	} elseif ($v == 'order') {
		require_once "include/order.php";
	} elseif ($v == 'promo') {
		require_once "include/promo_member.php";
	} elseif ($v == 'tentang_kami') {
		require_once "include/tentang_kami.php";
	} elseif ($v == 'bantuan') {
		require_once "include/bantuan.php";
	} elseif ($v == 'syarat_dan_ketentuan') {
		require_once "include/syarat_dan_ketentuan.php";
  } elseif ($v == 'hubungi_kami') {
    require_once "include/hubungi_kami.php";
  } elseif ($v == 'semua_produk') {
    require_once "include/semua.php";
  } elseif ($v == 'pengantar') {
    require_once "include/pengantar.php";
  } elseif ($v == 'status') {
    require_once "include/status.php";
  } elseif ($v == 'efek') {
    require_once "include/efek.php";
  } elseif ($v == 'kontrak') {
    require_once "include/kontrak.php";
  } elseif ($v == 'pengiriman') {
    require_once "include/pengiriman.php";
  } elseif ($v == 'pembatalan') {
    require_once "include/pembatalan.php";
  } elseif ($v == 'pembatalan_pembeli') {
    require_once "include/pembatalan_pembeli.php";
  } elseif ($v == 'barang_rusak') {
    require_once "include/barang_rusak.php";
  } elseif ($v == 'kupon') {
    require_once "include/kupon.php";
  } elseif ($v == 'tanggung_jawab') {
    require_once "include/tanggung_jawab.php";
  } elseif ($v == 'terimakasih') {
    require_once "include/terimakasih.php";
	} else {
		require_once "include/home.php";
	} 
?>
      </div>
    </div>
  </div>
</div>
<div class="wrapper">
  <div id="footer" class="clear">
    <div class="fl_left clear">
      <div class="fl_left center"> 
<?php
if (ISSET($_SESSION['iduser'])){
echo "<br><a href='logout.php'>Keluar</a>";

//jika tidak ada session
}else{
echo '<form name="masuk" action="masuk.php" method="post">
    <table border="0" style="margin-top:28px">
    <tr>
      <td><p style="padding-top:7px">Username</p></td>
      <td><input type="text" size="1" name="username" id="username"></td>
    </tr>
    
    <tr>
      <td><p style="padding-top:7px">Password</p></td>
      <td><input type="password" size="1" name="password" id="password"></td>
    </tr>
        </table>
            <p style="float:right;margin-right:7px"><a href="signup.php" id="daftar">Signup</a><input type="submit" id="subscribe" value="Login" /></p>
    </form>';
}
?>
	 
	</div>
    </div>
    <div class="fl_right">
      <div id="social" class="clear">
        <p>Stay Up to Date With Whats Happening</p>
        <ul>
          <li><a style="background-position:0 0;" href="https://twitter.com/nurulimamnotes">Twitter</a></li>
          <li><a style="background-position:-142px 0;" href="https://www.facebook.com/nurulimamnotes">Facebook</a></li> 
		  <li><a style="background-position:-284px 0;" href="http://www.nurulimam.com/feed/">RSS Feed</a></li>
	      <li><a style="background-position:-71px 0;" href="http://www.linkedin.com/in/nurulimam">LinkedIn</a></li>
          <li><a style="background-position:-213px 0;" href="http://www.flickr.com/photos/nurulimamnotes/">Flickr</a></li>
        </ul>
      </div>
      <div id="newsletter">
        <form action="#" method="post">
          <fieldset>
            <legend>Subscribe To Our Newsletter :</legend>
            <input type="text" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
            <input type="submit" id="subscribe" value="Submit" />
          </fieldset>
        </form>
      </div>
    </div>
    <div id="copyright" class="clear">
      <p class="fl_left">Copyright &copy; <?php echo date('Y') ?> Present <em>by</em> - <a href="http://www.nurulimam.com">Dannie Zetiawan</a></p>
    </div>
  </div>
</div>
</body>
</html>