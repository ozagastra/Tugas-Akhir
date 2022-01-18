<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="reservasi.html">
    
        <title>RUMAH STEAK</title>
        
      </head>
        <style>
            body{
                background-color:rgb(255, 255, 255);
                scale: 100%;
            }
            table{
                border-collapse: collapse;
            }
            table,thead,td{
                border: 1px solid black;
            }
            .info{
                border-right: 0px;
            }
            .nomor{
                text-align: center;
            }
            .label{
                text-align: center;
                border-right: 0px;
                border-left: 0px;
            }
            .content{
                border-right: 0px;
            }
            .input{
                border-left: 0px;
            }
        </style>
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
              <a class="nav-link mr-4" href="http://localhost/pbw/login.php">LOGIN</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

  <!-- Reservasi-->
        <div class="container">
            <div class="judul-pesanan mt-5
            \">
            
            <h3 class="text-center font-weight-bold">RESERVASI</h3>
            
            </div>
        <br>
        <form method="post" name="formReservasi">
            <table width="40" cellspacing="0" cellpading="5" align="left">
            <thead>
                <td width="50" align="center"><b>Nomor</b></td>
                <td class="info" colspan="5"><b>INFO RESERVASI</b></td>
            </thead>  
            <tr>
                <td class="nomor">1</td>
                <td class="content">Nama</td>
                <td class="label"><label for="fnama"></label>:</td>
                <td class="input"><input type="text" id="fnama" name="fnama" size="30"></td>
            </tr>
            <tr>
                <td class="nomor">2</td>
                <td class="content">No. Telpon</td>
                <td class="label"><label for="fnomortelpon"></label>:</td>
                <td class="input"><input type="text" id="fnomortelpon" name="fnomortelpon" size="30"></td>
            </tr>
            <tr>
                <td class="nomor">3</td>
                <td class="content">Email</td>
                <td class="label"><label for="femail"></label>:</td>
                <td class="input"><input type="text" id="femail" name="femail" size="30"></td>
            </tr>
            <tr>
                <td class="nomor">4</td>
                <td class="content">Tanggal</td>
                <td class="label"><label for="ftanggal"></label>:</td>
                <td class="input"><input type="text" id="ftanggal" name="ftanggal" size="30"></td>
            </tr>
            <tr>
                <td class="nomor">5</td>
                <td class="content">Waktu</td>
                <td class="label"><label for="fwaktu"></label>:</td>
                <td class="input"><input type="text" id="fwaktu" name="fwaktu" size="30"></td>
            </tr>
            <tr>
                <td class="nomor">6</td>
                <td class="content">Jumlah</td>
                <td class="label"><label for="fjumlah"></label>:</td>
                <td class="input"><input type="text" id="fjumlah" name="fjumlah" size="30"></td>
            </tr>
            <tr>
                <td class="nomor">9</td>
                <td class="content">Alamat</td>
                <td class="label"><label for="falamat"></label>:</td>
                <td class="input"><input type="text" id="falamat" name="falamat" size="30"></td>
            </tr>
            <tfoot>
              <td class="submit" colspan="5" align="right" height="50px"><input type="reset" value="reset"><input type="submit" value="submit"></td>
            </tfoot>
            </table>
        </form>
    <!-- Reservasi -->


    </body>  
</html>