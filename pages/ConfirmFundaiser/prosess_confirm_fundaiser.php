<?php
 include "config/connection.php";

$target = $_POST['target'];
$nama =  $_POST['nama'];
$alamat = $_POST['alamat'];
$cerita = $_POST['cerita'];
$waktu = $_POST['waktu'];
$judul = $_POST['judul'];
$name_img = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$tanggal_awal= date('Y-m-d');
$tanggal_akhir = date('Y-m-d', strtotime($tanggal_awal.'+'.$waktu.' days'));
move_uploaded_file($file_tmp, 'assets/images/upload/'. $name_img);

$query = "INSERT INTO galang_dana (id, target,nama,alamat,cerita,foto_kampanye,waktu,judul,tanggal_awal,tanggal_akhir) VALUES ('','$target','$nama','$alamat','$cerita','$name_img','$waktu','$judul','$tanggal_awal','$tanggal_akhir')";

$hasil = mysqli_query($conn, $query);
$id = mysqli_insert_id($conn);

if ($query) {
	
	
	echo "<script>
		alert('Terimakasih');
		window.location.href='index.php?page=FundraisingConfirmation&id=$id';
	</script>";
}else{

	echo "<alert>Gagal Kofirmasi</alert>";
}





?>