<?php 
session_start();
include_once("config.php");

if(!isset($_SESSION['email'])) {
    header("Location: login.php");
}

$results = mysqli_query($mysqli, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<body>
<table border="1" width="100%">
<thead>
<tr>
<a href="add.php">Tambah Data</a> </br>
<th>ID</th>
<th>Nama</th>
<th>Email</th>
<th>Alamat</th>
<th>Action</th>
</tr>
</thead>
    <tbody>
    <?php
    while($res = mysqli_fetch_array($results)) { ?>
    <tr>
    <td><?php echo $res['id']?></td>
    <td><?php echo $res['nama']?></td>
    <td><?php echo $res['email']?></td>
    <td><?php echo $res['alamat']?></td>
    <td>
    <a onclick ="return confirm('Delete Data')" href="delete.php?id=<?php echo $res['id'] ?>"><input type="submit" value="Delete"></a>
    <a href="edit.php?id=<?php echo $res['id'] ?>"><input type="submit" value="Edit"></a>
    </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
  
</body>    
</head>
</html>