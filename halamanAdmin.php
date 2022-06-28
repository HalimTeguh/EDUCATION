<?php
session_start();
include 'myconnection.php';

$username = $_SESSION['Username'];
$level = $_SESSION['Level'];
$name = $_SESSION['Name'];
if (!empty($username) && ($level == '1')) {
} else {
  echo '<script> window.location="login.php/error=username(invalid)||level(invalid)" </script>';
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang di Halaman Admin</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    .box {
      margin-top: 50px;
      border: 1px solid;
      height: 200px;
      border-radius: 25px;
    }

    .box:after {
      content: '';
      display: block;
      clear: both;
    }
  </style>
</head>

<body class="bg-light d-flex flex-column align-items-stretch" style="min-height:100vh;">
  <!-- HEADER -->
  <nav class="navbar" style="background-color: #EB8947;">
        <div class="container">
            <ul class="nav justify-content-start">
                <li class="nav-item">
                    <a class="navbar-brand mb-0 h1 " href="halamanAdmin.php" style="color: #ffffff;">
                        <h3 class="pt-3 pl-5 mb-0">EDUCATION</h3>
                    </a>
                </li>
            </ul>
            <ul class="nav justify-content-end">
                <li class="nav-item px-3">
                    <a class="nav-link active mb-0 text-light h6" aria-current="page" href="halamanAdmin.php"><b>HOME</b></a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link mb-0 text-light h6" href="pegawaiCRUD.php">SUNTING</a>
                </li>
                <li class="nav-item px-3 pr-5">
                    <a class="nav-link mb-0 text-light h6" href="logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
    </nav>
  <!-- body -->
  <div class="container bg-light p-2" style="flex-grow:1; justify-content: center;  ">
    <h3 class="p-4 py-5 mb-0" style="text-transform:capitalize;">
      <b>Selamat Datang Admin <?php echo $_SESSION['Name']; ?></b>
    </h3>
    <h4 style="text-align : center; background-color : #FFC107; padding : 10px; border-radius:50px"><b>MENU CRUD</b></h4>
    <div style="text-align: center;">
      <table class="table table-hover">
        <tbody>
          <tr>
            <td>
              <a href="pegawaiCRUD.php">
                <button class="btn btn-outline-warning my-3" style="border:#EB8947 1px solid; border-radius:50px; width: 250px;">Pegawai</button></a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="paketBelajarCRUD.php">
                <button class="btn btn-outline-warning my-3" style="border:#EB8947 1px solid; border-radius:50px; width: 250px;">Paket Belajar</button></a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="videoBelajarCRUD.php">
                <button class="btn btn-outline-warning my-3" style="border:#EB8947 1px solid; border-radius:50px; width: 250px;">Video Pembelajaran</button></a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="artikelCRUD.php">
                <button class="btn btn-outline-warning my-3" style="border:#EB8947 1px solid; border-radius:50px; width: 250px;">Artikel</button></a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="penggunaCRUD.php">
                <button class="btn btn-outline-warning my-3" style="border:#EB8947 1px solid; border-radius:50px; width: 250px;">Siswa Berlangganan</button></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

    <!-- footer -->
    <div class="" style="background-color: #EB8947 ;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <ul class="nav justify-content-start">
                    <li class="nav-item">
                        <a class="navbar-brand mb-0 h1 " href="indeks.html" style="color: #ffffff;">
                            <h3 class="pt-5">EDUCATION</h3>
                        </a>
                        <p class="text-light p-0" style="font-weight: bold;">EDUCATION Cooperation</p>
                        <p class="text-light p-0" style="text-align:justify;">Jl. Soekarno Hatta No. 9 Malang 65144.
                            Telp. 0341-404424, 404425: Fax. 0341-404420</p>
                        <p class="text-light p-0">Email: educationHebat@gmail.com</p>
                        <p class="text-light p-0" style="font-weight: bold;">Ayo Segera Daftar di EDUCATION</p>
                        <img src="img/Group 2.png" alt="" width="150px">
                        <br><br>
                        <img src="img/Group 1.png" alt="" width="150px">
                        <br><br><br>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <p class="text-light p-0 pt-5" style="font-weight: bold;">Tentang Kami</p>
                        <a class="nav-link mb-0 p-0 pb-2 text-light" href="#">About us</a>
                        <a class="nav-link mb-0 p-0 pb-2 text-light" href="#">We Are Hiring</a>
                        <a class="nav-link mb-0 p-0 pb-2 text-light" href="#">Testimonial</a>
                        <a class="nav-link mb-0 p-0 pb-2 text-light" href="#">Pusat Bantuan</a>
                        <br><br>
                        <img src="img/LOGO.png" alt="" width="250px">
                        <br><br><br>
                    </li>
                </ul>
            </div>
            <div class="col-md-2"></div>
        </div>
</body>

</html>