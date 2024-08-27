<?php
include 'koneksi.php';
$result=mysqli_query($koneksi,"select * from user order by userID");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="css" href="style.css">
    <script type="js" href="bootstap/js/bootstap.min.js"></script>
    <title></title>
</head>
<body>
    <center>
<div class="container">
<table class="table" border="1">
    <tr>
        <th>User ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Level</th>
        <th>Update</th>
    </tr>
        <?php
        while($user_data=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$user_data['userID']."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['password']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['namalengkap']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['level']."</td>";
        echo "<td><a href='edit.php?id=$user_data[userID]'>Edit</a> | <a href='delete.php?id=$user_data[userID]'>Delete</a></td></tr>";
        ?>
        <?php
        echo "</tr>";
        }
        ?>

</table>
</body>
</html>