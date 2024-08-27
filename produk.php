<?php
include 'koneksi.php';
$result=mysqli_query($koneksi,"select * from produk order by produkID");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>
<body>
<div class="container">
<table class="table">
    <tr>
        <th>Produk ID</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok Barang</th>
        <th>Update</th>
    </tr>
        <?php
        while($user_data=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$user_data['produkID']."</td>";
        echo "<td>".$user_data['namaproduk']."</td>";
        echo "<td>".$user_data['harga']."</td>";
        echo "<td>".$user_data['stok']."</td>";
        echo "<td><a href='edit.php?id=$user_data[produkID]'>Edit</a> | <a href='delete.php?id=$user_data[produkID]'>Delete</a></td></tr>";
        ?>
        <?php
        echo "</tr>";
        }
        ?>

</table>
</body>
</html>