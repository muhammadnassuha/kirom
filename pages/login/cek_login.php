<?php
session_start();

include '../../config/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn,  "select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek> 0){

    $data = mysqli_fetch_assoc($login);

    $_SESSION['username'] = $data['username'];

    header("location:../../index.php");    
}else{

    // alihkan ke halaman login kembali
    echo "<script>alert('Username Tidak Ada Silakan Register dulu'); window.location.href='register.php';</script>";
}

?>