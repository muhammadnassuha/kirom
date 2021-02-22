<!-- <!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <form action="prosess_register.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <div class="card mt-5" style="padding: 30px; border-radius: 10px;" >
                    <h2 style="text-align: center;">Registrasi</h2>
                    <p style="text-align: center;">Ayo buat akun untuk Galang Dana </p>
                    <div class="mb-3">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Username</label>
                  <input type="email" class="form-control" name="username" id="exampleFormControlInput1" placeholder="Masukan Username" required="">
                </div>
                 <div class="mb-3">
                  <label for="formGroupExampleInput" class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control" id="formGroupExampleInput" placeholder="Masukan Nama Dengan Benar" required="Masukan Nama">
                </div>
                <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Password Dengan Benar" required="Masukan Password">
                </div>
                <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Konfirmasi Password</label>
                  <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Password Dengan Benar" required="Masukan Password">
                </div>
              <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-outline-primary" type="button">Kirim</button>
                </div>
                <div class=" mt-2">
                    <h6 >kembali ke </h6>
                <a href="login.php" style="text-decoration: none; color: black;"><h6>Login</h6></a>
                
                </div>
                
            </div>
        </div>
    </div>
 </div>
 </form>
               

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

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="prosess_register.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="name" placeholder="Nama Anda"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="username" id="email" placeholder="Email Anda"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Masukan Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="ulangi_password" id="re_pass" placeholder="Masukan Ulang Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="assets/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">Saya Sudah Punya Akun</a>
                    </div>
                </div>
            </div>
        </section>

       

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>