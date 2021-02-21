<!-- section -->

	<div class="section tabbar_menu">
	   <div class="container">
	      <div class="row">
		      <div class="col-md-12">
			     <div class="tab_menu">
                    <?php 
                    include "config/connection.php";
                     $query_mysqli = mysqli_query($conn, "SELECT SUM(jumlah_donasi) as jumlah_donasi FROM donasi");

                    while ($query = mysqli_fetch_array($query_mysqli)) {
                     
                    ?>
				    <ul>
					    <li>
                            <span>8.552<br>campaign</span>
                        </li>
					    <li>
                            <span><?php echo $query['jumlah_donasi']; ?><br>Donasi Terkumpul</span>
                        </li>
					    <li>
                            <span>345.345.330<br>Donatur </span>
                        </li>
					   <li></li>
                       <?php }?>
					   <li>
                        <a href="#"><span class="icon"><img src="assets/images/i5.png" alt="#" /></span><span>Location</span></a></li>
					   <li><a href="#"><span class="icon"><img src="assets/images/i6.png" alt="#" /></span><span>Call us</span></a></li>
					   <li><a href="#"><span class="icon"><img src="assets/images/i7.png" alt="#" /></span><span>Email</span></a></li>
					</ul>
				 </div>
			  </div>
		  </div>
	   </div>
	</div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Tentang kami</span></h2>
                        </div>
						<div class="full">
						  <p>YAYASAN ALKIROM AMANAH adalah lembaga sosial yang sangat serius berusaha membantu anak yatim juga kemanusiaan pada tanggal 4 september 2017 terbentuklah organisasi dengannama Yayasan Alkirom Amanah dengan di tandai SK MENKIMHAM RI NO : AHU-0114890.AH.01.01.Tahun 2017</p>
						</div>
						<div class="full">
						   <!-- <a class="hvr-radial-out button-theme" href="#">About more</a> -->
						</div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="full">
                        <img src="assets/images/logo-header.png" alt="#" class="mt-5" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Donasi</span></h2>
                        </div>
					  </div>
                </div>
                <?php 
                    include "config/connection.php";

                    $query_mysqli = mysqli_query($conn, "SELECT * FROM galang_dana ");

                    while ($query = mysqli_fetch_array($query_mysqli)) {
                        
                 ?>

				<div class="card ml-4 mb-4" style="width: 22rem;">
                  <img src="assets/images/upload/<?= $query['foto_kampanye'] ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $query['nama']; ?></h5>
                        <p><?php echo $query['judul']; ?></p>
                        <hr style="margin top: 5px; margin-bottom: 5px;">
                        <div class="row">
                            <div class="col-6">Sisa waktu</div>
                            <div class="col-6">Terkumpul</div>
                        </div>
                        <div class="row">
                            <?php 
                                $awal = new Datetime($query['tanggal_awal']);
                                $akhir = new Datetime($query['tanggal_akhir']);

                                $sisa = $awal->diff($akhir);  
                                ?>
                                <div class="col-6 "><?php echo $sisa->days ?> Hari</div>
                                <div class="col-6"><?php echo  number_format($query ['target']); ?></div>
                        </div>
                        <a href="index.php?page=ConfirmFundaiser&&id=<?php echo base64_encode($query['id']) ?>" class="btn btn-primary col-md-12 mt-4">Donasi</a>
                  </div>
                </div>
              <?php } ?>
             </div>  
          
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50 silver_bg">
        <div class="container">
            <div class="row">
			    <div class="col-md-6">
                    <div class="full float-right_img">
                        <img src="assets/images/img6.png" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Visi</h2>
                        </div>
						<div class="full">
						  <p>"Menjadi Lembaga Yang Ketermuka Di Indonesia & Membantu Masyarakat Luas" </p>
						</div>
						<!-- <div class="full">
						   <a class="hvr-radial-out button-theme" href="#">Apply</a>
						</div> -->
                    </div>
                </div>
			</div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Misi</span></h2>
                        </div>
						<div class="full">
						  <p>Konsumtif <br>
                            1. Memenuhi kebutuhan jasmani anak yatim <br>
                            2. Memenuhi kelangsungan hidup anak yatim<br>
                            
                            Produktif<br>
                            1. Memberikan program pendidikan dan menyalurkan anak yatim di jenjang pendidikan<br>
                            2. Menciptakan sumber daya manusia yang kompeten guna untuk kehidupan yang akan anak yatim dimasa depan</p>
						</div>
						<!-- <div class="full">
						   <a class="hvr-radial-out button-theme" href="#">See More</a>
						</div> -->
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="full">
                        <img class="img-responsive" src="assets/images/img7.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <!-- <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>News</span></h2>
                        </div>
					  </div>
                </div>
			  </div>
               <div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">
 -->
                        <!-- The slideshow -->
<!--                         <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
									   <div class="full blog_img_popular">
                                          <img class="img-responsive" src="assets/images/img9.png" alt="#" />
										  <h4>Technology</h4>
										  <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                          <img class="img-responsive" src="assets/images/img8.png" alt="#" />
										  <h4>Education</h4>
										  <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
										</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
									   <div class="full blog_img_popular">
                                          <img class="img-responsive" src="assets/images/img9.png" alt="#" />
										  <h4>Technology</h4>
										  <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                          <img class="img-responsive" src="assets/images/img8.png" alt="#" />
										  <h4>Education</h4>
										  <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
 -->
                        <!-- Left and right controls -->
<!--                         <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

            </div>			  
           </div>
        </div>
 -->	<!-- end section -->
	