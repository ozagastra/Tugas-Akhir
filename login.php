<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="stylebuku_tamu.css">

    <title>LOGIN</title>
</head>
<body>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="kotak">
          <h1 class="display-4"><span class="font-weight-bold">RUMAH STEAK</span></h1>
          <hr>
          <p class="lead font-weight-bold">Jl. Soekarno Hatta No.56 Semarang <br> 
          Buka Jam : 16.00 - 23.00 WIB</p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


  <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link mr-4" href="http://localhost/pbw/index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="http://localhost/pbw/daftar_menu.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">  
              <a class="nav-link mr-4" href="http://localhost/pbw/pesanan.php">PESANAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="http://localhost/pbw/reservasi.php">RESERVASI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="http://localhost/pbw/order.php">LOGIN</a>
            </li>
          </ul>
        </div>
 </div> 
</nav>
<!-- Akhir Navbar -->

<?php 
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->


    <title>Halaman Login</title>
  </head>
  <body>
  <!-- Form Login -->
    <div class="container">
      <h4 class="text-center">FORM LOGIN</h4>
      <hr>
      <form method="POST" action="">
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></div>
              </div>
              <input type="text" class="form-control" placeholder="Masukkan Username" name="username">
            </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
              </div>
              <input type="password" class="form-control" placeholder="Masukkan Password" name="password">
          </div>
        </div>
        <div class="mb-3" >
          <small><a href="register.php" class="text-dark">Belum Punya Akun ? Buat Akun Anda !</a></small>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
        <button type="reset" name="reset" class="btn btn-danger">RESET</button>
      </form>
  <!-- Akhir Form Login -->

  <!-- Eksekusi Form Login -->
      <?php 
        if(isset($_POST['submit'])) {
          $user = $_POST['username'];
          $password = $_POST['password'];

          // Query untuk memilih tabel
          $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");
          $hasil = mysqli_fetch_array($cek_data);
          $status = $hasil['status'];
          $login_user = $hasil['username'];
          $row = mysqli_num_rows($cek_data);

          // Pengecekan Kondisi Login Berhasil/Tidak
            if ($row > 0) {
                session_start();   
                $_SESSION['login_user'] = $login_user;

                if ($status == 'admin') {
                  header('location: admin.php');
                }elseif ($status == 'user') {
                  header('location: user.php'); 
                }
            }else{
                header("location: login.php");
            }
        }
       ?>
    </div>
  <!-- Akhir Eksekusi Form Login -->







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>