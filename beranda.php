<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
<title>Kasir K4</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="bootstap/js/bootstap.min.js"></script>
</head>
<body>
	<center>
<h1>Kasir</h1>
<div class="menu">
	<center>
<a href="beranda.php">Beranda</a>
<?php
$level= $_SESSION['level']=='petugas';
$level2= $_SESSION['level']=='admin';
if($level){
?>
<a href="pelanggan.php" target="frame">Pelanggan</a>
<a href="produk.php" target="frame">Data Barang</a>
<a href="penjualan.php" target="frame">Transaksi Penjualan</a>
<a href="laporan.php" target="frame">Laporan</a>
<?php }else if($level2){ ?>
<a href="petugas.php" target="frame">Petugas</a>
<a href="pelanggan.php" target="frame">Pelanggan</a>
<a href="produk.php" target="frame">Data Barang</a>
<a href="penjualan.php" target="frame">Transaksi Penjualan</a>
<a href="laporan.php" target="frame">Laporan</a>

<?php }else{ ?>
<script>alert('Kegiatan dibatasi')</script>
<?php } ?>
<a href="index.php">Logout</a>
</div>
<iframe name="frame" frameborder="0" width="100%" 
height="402px"></iframe>
<footer>
<span>Copyright</span> &copy UJIKOM K4 , <span class="t">2024</span>.
</footer>
</body>
</html>
