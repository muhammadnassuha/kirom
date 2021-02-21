<div class="container">
	<div class="row">
			<div class="card mt-4 mb-4" style="padding: 10px; width: 100%; ">
				 <p style="text-align: center; font-weight: bold">KONFIRMASI DONASI ANDA</p>
				  <p style="text-align: center;">Segera lakukan pembayaran dengan minimal nominal :</p>
				    <?php
              include "config/connection.php";
                $name = $_GET['id'];
                  $query = mysqli_query($conn, "SELECT * FROM bank where id=$name ");
                  mysqli_error($conn);
                    while ($data = mysqli_fetch_array($query)){
                      ?>
                        <h5 class="DONASI" style="text-align: center; font-weight:bold; font-size:24px;"><font class="unik"><?php echo $data['jumlah_donasi']; ?></font></h5><?php } ?>
                          <div class="col">
                         </div>
                           <div class="title_donasi" style="text-align: center;">Harap ditransfer Ke Rek a/n <b>Yayasan Alkirom Amanah</b> berikut ini :</div>
                           <div class="rekening" style=" text-align: center; margin-top: 15px">
                          <img src="assets/images/bri.jpg" style="float: bottom; width: 10em;"><p class="no_rek" style="font-size: 15px;"><b>0523 0100 0198 302</b></p>
                        </div>
                           <p style="text-align: center;">Segera lakukan pembayaran</p>
                          <div style=" text-align: center; ">
                        <a href="index.php?page=DonationConfirmation&&id=<?php echo base64_encode($name); ?>" class=" btn btn-primary" style="font-weight: bold;">KONFIRMASI DONASI</a>
                    </div>
              		</div>
              	</div>
              </div>
            </div>