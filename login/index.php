<!DOCTYPE html>
<html>

<head>
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
  if (isset($_GET['pesan'])) 

  {
    if ($_GET['pesan'] == "gagal") {
      echo "Login gagal! username dan password salah!";
    } else if ($_GET['pesan'] == "logout") {
      echo "Anda telah berhasil logout";
    } else if ($_GET['pesan'] == "belum_login") {
      echo "Anda harus login untuk mengakses halaman";
    }
  }
  
  ?>
    <img class="wave" src="img/2.png">
    <div class="container">
        <div class="img">
            <img src="img/garuda.png">
        </div>
        <div class="login-content">
            <form action="proses.php" method="POST">
                <img src="img/logo.png">
                <h2 class="title">Admin Desa Ngadiroyo</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" name="username" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" class="input">
                    </div>
                </div>

                <input type="submit" class="btn" value="Login">
                <a href="../index.php">
                    < Kembali</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>