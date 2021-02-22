<?php
include "config/connection.php";

$nama = $_POST['nama'];
$no_ktp= $_POST['ktp'];
$name_img = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$tanggal = $_POST['date'];

move_uploaded_file($file_tmp, 'assets/images/verifikasi/'. $name_img);

$query = "INSERT INTO verifikasi_table (id,nama,no_ktp,bukti_ktp,tanggal) VALUES ('','$nama','$no_ktp','$name_img','$tanggal')";

$hasil = mysqli_query($conn, $query);



if ($query) {
	echo "<script>
		alert('Data Anda Akan Muncul Di Lihat Selengkap nya');
		window.location.href='index.php';
	</script>";
}else{
	echo "<alert>Gagal Masuk Data</alert>";
}


?>