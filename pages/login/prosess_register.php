<?php 
include "../../config/connection.php";

$user = $_POST['username'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$ulangi_pass = $_POST['ulangi_password'];

$query = "INSERT INTO user (username,nama,password) VALUES('$user','$nama','$password')";

$sql_cek_email = "SELECT count(username) as total from user where username = '$user'";

if($password != $ulangi_pass){
	echo "<script>alert('Password tidak sama anjing'); window.location.href='register.php';</script>";
	    	
}else{

	// CEK EMAIL
	if ($result = $conn -> query($sql_cek_email)) {
	    while ($row = $result -> fetch_row()) {
	    	if($row[0] > 0){
	    		echo "<script>alert('Email sudah ada'); window.location.href='register.php';</script>";
	    	}else{
				$hasil = mysqli_query($conn, $query) or die("koneksi Gagal:".mysqli_connect_error());
				echo "<script>alert('Berhasil Register'); window.location.href='login.php';</script>";
				
	    	}
	    }
	}
}


?>