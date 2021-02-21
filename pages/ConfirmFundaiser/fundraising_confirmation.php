<div class="section ">
	<div class="container mb-5" >

		<div class="row">
			<?php
			include "config/connection.php";
			$name = $_GET['id'];
			$query = mysqli_query($conn, "SELECT * FROM galang_dana where id=$name  ");
			mysqli_error($conn);
			while($data = mysqli_fetch_array($query)){
				?>

				<div class="col-md-6">
					<img src="assets/images/upload/<?= $data['foto_kampanye'] ?>"  class="cover" style="height: 300px ; width:500px;margin-top: 30px;">
					<h2 class="mt-5"><?php echo $data['nama']; ?></h2>
					<h4><?php echo $data['judul']; ?>h</h4>
				</div>

				<div class="col-lg-6 mt-4">
					<h1>Rp.<?php echo  number_format($data ['target']);?></h1>

					<?php
					if ($data['tanggal_akhir'] < date('Y-m-d')) { ?>

						<div class="donasi" >
							<a href="index.php?page=AddDonation" class="btn btn-primary btn-lg btn-lg disabled donasi_sekarang">DONASI SEKARANG</a>
						</div>

					<?php }else{ ?>
						<a  href="index.php?page=AddDonation" class="btn btn-primary btn-lg btn-lg disabled">Donasi Sekarang</a>
					<?php } ?>

					<h4>Target <b><?php echo  number_format($data ['target']);?></h4>
						<?php
						$awal = new Datetime($data['tanggal_awal']);
						$akhir = new Datetime($data['tanggal_akhir']);

						$sisa = $awal->diff($akhir);  
						?>
						<h5><?php echo $sisa->days ?> Hari lagi</h5>

						<div class="share">
							<p class="text-center">Bagikan Melaui :</p><hr>
							<div class="facebook">
								<a href="https://www.facebook.com/AlkiromAmanah/?ref=br_rs" class="btn btn-outline-primary mt-3 col-md-12" style="">Facebook</a>
							</div>
							<div class="instagram">
								<a href="https://www.instagram.com/official_alkiromamanah/" class="btn btn-outline-primary mt-3 col-md-12" style="">Instagram</a>
							</div>
							<div class="whatsapp">
								<a href="https://api.whatsapp.com/send?phone=+62 852-8202-7853" class="btn btn-outline-primary mt-3 col-md-12" style="">Whatsapp</a>
							</div>
						</div>
					</div>
				</div>

				<hr>

				<div class="row">
					<div class="card col-md-6 mr-4 ml-3 mb-3" >
						<div class="card-body" >
							<h2 class="card-title">Deskripsi</h2>
							<p class="card-text">S<?php echo $data['cerita']; ?></p>
						</div>
					</div>
				<?php } ?>

				<div class="card col-md-5">
					<div class="card-body">
						<h3 class="card-title">Donatur (2)</h3>
						<?php 
							include "config/connection.php";

							$query = mysqli_query($conn ," SELECT * FROM bank limit 2");
							(mysqli_error($conn));
							while ($data = mysqli_fetch_array($query)) {
							?>


							<div class="row">
								<div class="col-4">
									<img src="assets/images/i1.png" width="80">
								</div>
								<div class="col-7">
									<h3 class="card-title"><?php echo $data['nama']; ?></h3>
									<label><?php echo date('l, d-m-Y'); ?></label>
									<h5><?php echo $data ['jumlah_donasi']; ?></h5>
									<p><?php echo $data['keterangan']; ?></p>
								</div>	
							</div>
							<hr>
								<?php } ?>
								</div>
							</div>
						</div>
		

		 <div class="container">
	    	<div class="row">
	    		<a class="btn btn-outline-primary mt-3" style="border-color: #939393; width: 100%;	" href="index.php?page=FundraisingVerification">VERIFIKASI</a>
	    	</div>
	    </div>
	    </div>
