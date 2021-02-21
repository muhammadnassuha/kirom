<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<?php 
session_start(); 
if (!isset($_SESSION['username']))
{
  header("location:pages/login/login.php");
}
?>

<head>
  <?php include "config/connection.php"; ?>
  <?php include "layouts/header.php" ?>
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

  <!-- LOADER -->
  <!--   <div id="preloader">
        <div class="loader">
            <img src="assets/images/loader.gif" alt="#" />
        </div>
      </div> -->
      <!-- end loader -->
      <!-- END LOADER -->

      <!-- Start Navbar -->
      <header class="top-header">
        <?php include "layouts/navbar.php" ?>
      </header>
      <!-- End Navbar -->

      <!-- Start Banner -->
      <div class="ulockd-home-slider">
        <?php include "layouts/banner.php"; ?>
      </div>
      <!-- End Banner -->

      <?php 


      if(isset($_GET['page']))
      {
        if($_GET['page']=="ConfirmFundaiser" && isset($_GET['id']))
        {

          
        if (!isset($_SESSION['username']))
        {
          header("location:login/login.php");
        }

        include "pages/ConfirmFundaiser/confirm_fundaiser.php";
      }
      else if($_GET['page']=="AddRaisingFunds")
      {
        include "pages/ConfirmFundaiser/add_raise_funds.php";
      }
      else if($_GET['page']=="ProsessFundaiser") 
      {
       include "pages/ConfirmFundaiser/prosess_confirm_fundaiser.php";
     }else if ($_GET['page']=="AbaoutUs") 
     {
     include "pages/ConfirmFundaiser/About_Us.php";
     }else if ($_GET['page']=="AddDonation") 
     {
      include "pages/ConfirmFundaiser/add_donation.php";

     }else if ($_GET['page']=="ProsessDonation")
     {
      include "pages/ConfirmFundaiser/prosess_donation.php";

     }else if ($_GET['page']=="Bri") 
     {   
      include "pages/ConfirmFundaiser/bri.php";

     }else if ($_GET['page']=="Bni") 
     {   
      include "pages/ConfirmFundaiser/bni.php";

     }else if ($_GET['page']=="Cimb") 
     {   
      include "pages/ConfirmFundaiser/cimb.php";

     }else if ($_GET['page']=="ConfirmTransaksi") 
     {
      include "pages/ConfirmFundaiser/confirm_transaksi.php";

     }else if ($_GET['page']=="ProsessTransaksi") 
     {
        include "pages/ConfirmFundaiser/prosess_confirmBank.php";

      }else if ($_GET['page']== "FundraisingConfirmation")
      {
        include "pages/ConfirmFundaiser/fundraising_confirmation.php";

      }else if ($_GET['page']=="FundraisingVerification")
      {
        include "pages/ConfirmFundaiser/fundraising_verification.php";

      }else if ($_GET['page']=="ProsessFundaiserVerification") 
      {
        include "pages/ConfirmFundaiser/prosess_FundraisingVerification.php";

      }else if ($_GET['page']=="Seemore")
      {
        include "pages/ConfirmFundaiser/see_more.php";
        
      }else if ($_GET['page']=="Logout") 
      {
        include "pages/login/logout.php";

      }else if ($_GET['page']=="DonationConfirmation" && isset($_GET['id']))
       {
        include "pages/ConfirmFundaiser/donation_confirmation.php";

      }else if ($_GET['page']=="ProsessConfrimation") 
      {
        include "pages/ConfirmFundaiser/prosess_confirmation.php";
      }
    }else{
      include 'home.php';
    }

    ?>
    <!-- Start Footer -->
    <footer class="footer-box">
      <div class="container">

       <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <div class="footer_blog">
            <div class="full margin-bottom_30">
              <img src="assets/images/logo/dypa-white.png" alt="#"  >
            </div>
            <div class="full white_fonts">
             <p>YAYASAN ALKIROM AMANAH adalah lembaga sosial yang sangat serius berusaha membantu anak yatim juga kemanusiaan pada tanggal 4 september 2017 terbentuklah organisasi dengannama Yayasan Alkirom Amanah dengan di tandai SK MENKIMHAM RI NO : AHU-0114890.AH.01.01.Tahun 2017</p>
           </div>
         </div>
       </div>

       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <div class="footer_blog footer_menu white_fonts">
          <h3>Media Sosial</h3>
          <ul> 
           <li><a href="#">> Facebook</a></li>
           <li><a href="index.php?page=AbaoutUs">> Instagram</a></li>
           <li><a href="#">> Youtube</a></li>
         </ul>
       </div>
     </div>

				<!--  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Newsletter</h3>
							 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							 <div class="newsletter_form">
							    <form action="index.html">
								   <input type="email" placeholder="Your Email" name="#" required />
								   <button>Submit</button>
								</form>
							 </div>
						 </div>
           </div>	  -->

           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
             <div class="footer_blog full white_fonts">
               <h3>Hubungi Kami</h3>
               <ul class="full">
                <li><img src="assets/images/i5.png"><span>Sekretariat : Jl. Masijd Al-Mujahidin RT.02/06 <br>kel. meruyung kec. limo kota depok 16515</span></li>
                <li><img src="assets/images/i6.png"><span>riki.alkiomamanah@gmail.com</span></li>
                <li><img src="assets/images/i7.png"><span>(021) 80768272 <br>085282027853 (Whatsapp)</span></li>
              </ul>
            </div>
          </div>	 

        </div>

      </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="crp"></p>
          </div>
        </div>
      </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <?php include "layouts/footer.php"; ?>

  </body>

  </html>
