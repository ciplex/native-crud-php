<?php  
include_once('config.php');

$id = $_GET['id'];

session_start();

if(!isset($_SESSION['email'])) {
    header("Location: login.php");
}


// delete data berdasarkan id
mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

// $num = mysqli_affected_rows($mysqli);
// if ($num > 0) {
//     echo "Data Berhasil hapus<br>";
//     echo "<a href='index.php'>See Data</a>";
// }else{
//     echo "Data Gagal Dihapus<br>";
//     echo "<a href='add.php'>back</a>";
// }
// kalo udah delete lempar ke index.php
header("Loation:index.php");
?>