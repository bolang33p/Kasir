<?php
include 'koneksi.php';
$result=mysqli_query($koneksi,"select * from penjualan order by penjualanID");
?>
<link rel="stylesheet" type="text/css" href="style.css">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>Penjualan ID</th>
		<th>Tanggal Penjualan</th>
		<th>Total Harga</th>
		<th>Pelanggan ID</th>
		<th>Detail</th>
	</tr>
		<?php
		while($user_data=mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>".$user_data['penjualanID']."</td>";
		echo "<td>".$user_data['tanggalpenjualan']."</td>";
		echo "<td>".$user_data['totalharga']."</td>";
		echo "<td>".$user_data['pelangganID']."</td>";
		echo "<td><a href='detailpenjualan.php?id=$user_data[penjualanID]'>Detail</a></td></tr>";
		?>
		
		<?php
		echo "</tr>";
		}
		?>

</table>
</body>
</html>