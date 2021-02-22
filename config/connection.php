<?php 
$host = "localhost";
$name = "root";
$password = "";
$db = "sedekah";

$conn = mysqli_connect($host, $name, $password, $db);
if (!$conn) {
	die("koneksi Gagal:".mysqli_connect_error());
}


?>