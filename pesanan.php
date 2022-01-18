<!doctype html>
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>RUMAH STEAK</title>
  </head>
  <body>
  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
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
        <!--<a class="navbar-brand text-white" href="index.html"><strong>Bakso</strong> Solo Baru</a> -->
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

  <!-- Menu -->
    <div class="container">
      <div class="judul-pesanan mt-5
      \">
       
        <h3 class="text-center font-weight-bold">DATA PESANAN</h3>
        
      </div>
      <table class="table table-bordered" id="example">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Alamat</th>
            <th scope="col">Nama Pesanan</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Harga</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Jl.Tlogosari no 23</td>
            <td>Sirloin</td>
            <td>2</td>
            <td>01-12-2021</td>
            <td>Rp.45.000</td>
            <td>
              <a href="#" class="badge badge-danger">Hapus Data</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jl.Tlogosari no 23</td>
            <td>Chiken cordon blue</td>
            <td>2</td>
            <td>01-12-2021</td>
            <td>Rp.36.000</td>
            <td>
              <a href="#" class="badge badge-danger">Hapus Data</a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Jl.Tlogosari no 23</td>
            <td>Beff</td>
            <td>6</td>
            <td>01-12-2021</td>
            <td>Rp.45.000</td>
            <td>
              <a href="#" class="badge badge-danger">Hapus Data</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  <!-- Akhir Menu -->
    

  <!-- Awal Footer -->
      <hr class="footer">
      <div class="container">
        <div class="row footer-body">
          <div class="col-md-6">
          <div class="copyright">
            <strong>Copyright</strong> <i class="far fa-copyright"></i> 2022 -  Designed byOzagastra</p>
          </div>
          </div>
  <!-- Akhir Footer -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
  </body>
</html>