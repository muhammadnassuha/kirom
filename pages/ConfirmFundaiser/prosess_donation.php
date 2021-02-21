<?php
include "../../config/connection.php";

$nama = $_POST["nama"];
$no_wa = $_POST["wa"];
$jumlah = str_replace(".", "", $_POST["jumlah"]);
$keterangan = $_POST["keterangan"];
$radios1 = $_POST["radios"];
$norek1 = $_POST["norek2"];

$query = "INSERT INTO bank(nama, no_wa, jumlah_donasi, keterangan, nama_bank, norek) VALUES		
 		('$nama','$no_wa','$jumlah','$keterangan','$radios1', '$norek1')";


$hasil = mysqli_query($conn,$query);
$id = base64_encode(mysqli_insert_id($conn));
if ($radios1 == "bri") {
	echo "<script>
			window.location.href='../../index.php?page=Bri&id=$id';
		</script>";

} elseif ($radios1 == "bni") {

echo "<script>
		window.location.href='../../index.php?page=Bni&id=$id';
	</script>";
	

} else {

	echo "<script>
		window.location.href='../../index.php?page=Cimb&id=$id';
	</script>";
}


?>







