<?php
require_once ('../../config/connection.php');


?>
<!-- <!DOCTYPE html>
<html>
<head>
  <title></title>
  <!DOCTYPE html>
<html>
<head>
  <title></title>
        <link rel="shortcut icon" href="assets/img/ico/logo_favicon.png">
        
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        Material Icons CSS -->
       <!--  <link href="assets/fonts/iconfont/material-icons.css" rel="stylesheet">
        FontAwesome CSS -->
       <!--  <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
         materialize -->
       <!--  <link href="assets/materialize/css/materialize.min.css" rel="stylesheet">
         Bootstrap -->
       <!--  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
         shortcodes -->
       <!--  <link href="assets/css/shortcodes/shortcodes.css" rel="stylesheet">
        <link href="assets/css/shortcodes/login.css" rel="stylesheet">
        <link rel="stylesheet" href="login/assets/css/loader.css">
        Style CSS --> 
    <!--     <link href="style.css" rel="stylesheet">
</head>
<body> 


  <div class="preloader-background">
    <div class="preloader-wrapper big active">
      <div id="loader-wrapper">
        <div id="loader"></div>
      </div>
    </div>
  </div>   

  <section class="section-padding banner-wrapper login-alt banner-6 fullscreen-banner">
    <div class="container">
      <div class="login-wrapper">
        <div class="card-wrapper"></div>
        <div class="card-wrapper">
         <h3 class="title">Login Untuk Donasi</h3>
         <form method="post" action="cek_login.php">
          <div class="input-container">
            <input type="text" id="username" name="username" required="required"/>
            <label for="username">Username</label>
            <div class="bar"></div>
          </div>
         <div class="input-container">  
            <input type="password" id="password" name="password" required="required"/>
            <label for="password">Password</label>
            <div class="bar"></div>
          </div>
        
             <div class="input-container">
              <a href="register.php">Register</a>
            </div>
            
          <div class="button-container">
           <button type="submit" class="btn btn-lg btn-block waves-effect waves-light">Login</button>
         </div>
       </div>


       

     </form>
   </div>
 </div>
</div>
</section>

   </body>
   </html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content" style="margin-top: 100px;">
                    <div class="signin-image">
                        <figure><img src="assets/images/LOGO WEBSITE-01.png" alt="sing up image"></figure>
                        <a href="register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form" action="cek_login.php">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password"  name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
</body>
</html>
