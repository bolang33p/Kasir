<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Kasir</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login">
<h2>Silahkan Login</h2>
<form action="" method="POST">
<input type="text" name="user" placeholder="Username"><br>
<input type="password" name="pass" placeholder="Password" required><br>
<button class="btn-kirim" type="submit" name="submit">Masuk</button>
<a href="daftar.php"><button class="btn-batal" 
type="button">Daftar</button></a>
</form>
<?php
if (isset($_POST['submit'])) {
$usera =$_POST['user'];
$pass =$_POST['pass'];
$data_user =mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$usera' AND password = '$pass'");
$r = mysqli_fetch_array($data_user);
$username =$r['username'];
$password =$r['password'];
$level= $r['level'];
if($usera==$username && $pass==$password){
$_SESSION['level'] = $level;
header("Location: beranda.php");
}else {
echo "<script>alert('Login Gagal');</script>";
}
}
?>
</div>
</body>
</html>