<?php

include "config/connection.php";


$nama = $_POST["nama"];
$rupiah = $_POST["rupiah"];
$name_img = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];

move_uploaded_file($file_tmp, 'assets/images/upload/'. $nama);

$query = "INSERT INTO konfirmasi_pembayaran (id,nama, rupiah, img) VALUES		
 		('','$nama','$rupiah','$name_img')";
 		

$hasil= mysqli_query($conn, $query);

if($query){
	
	echo "<script>
		alert('Terimakasih');
		window.location.href='index.php?id=$id';
	</script>";
}else{
	echo 'something went wrong please try again!';
}

 

?>
		