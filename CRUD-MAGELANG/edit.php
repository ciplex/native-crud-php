<?php
include_once("config.php");
$id = $_GET['id'];
$query = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

$result = mysqli_fetch_assoc($query);

session_start();

if(!isset($_SESSION['email'])) {
    header("Location: login.php");
}

?>

<form action="prosesupdate.php" method="POST">
<input type="hidden" value="<?php echo $result['id'] ?>" name="id">

<label for="nama">Nama</label>
<input type="text" value="<?php echo $result['nama'] ?>" name="nama" ></br>

<label for="email">Email</label>
<input type="text" value="<?php echo $result['email'] ?>" name="email" ></br>

<label for="password">Password</label>
<input type="password" value="<?php echo $result['password'] ?>" name="password" ></br>

<label for="alamat">Alamat</label>
<input type="text" value="<?php echo $result['alamat']?>" name="alamat" ></br>

<input type="submit" name="submit" value="Simpan">
</form>
