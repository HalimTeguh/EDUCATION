<?php
session_start();
include 'myconnection.php';

$username = $_SESSION['Username'];
$level = $_SESSION['Level'];
$name = $_SESSION['Name'];
if (!empty($username) && ($level == '2')) {
} else {
    echo '<script> window.location="login.php/error=username(invalid)||level(invalid)" </script>';
    header('location:login.php');
}

$query = "SELECT p.KodePaket AS 'Kode', p.Nama AS 'NamaPaket' FROM pengguna u
    RIGHT OUTER JOIN paket_belajar p ON p.KodePaket = u.Kode_Paket
    WHERE Username = '$username'";
$result = mysqli_query($connect, $query);
$data = mysqli_fetch_assoc($result);
$paket = $data['Kode'];
$namaPaket = $data['NamaPaket'];


$_SESSION['PaketBelajar'] = $paket;

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Menyisipkan Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>List Video Pembelajaran</title>
    <style>
        .status a:visited {
            background-color: #04AA6D;
        }
    </style>
</head>

<body class="bg-light d-flex flex-column align-items-stretch" style="min-height:100vh ;">
    <!-- HEADER -->
    <nav class="navbar" style="background-color: #EB8947;">
        <div class="container">
            <ul class="nav justify-content-start">
                <li class="nav-item">
                    <a class="navbar-brand mb-0 h1 " href="homeUser.php" style="color: #ffffff;">
                        <h3 class="pt-3 pl-5 mb-0">EDUCATION</h3>
                    </a>
                </li>
            </ul>
            <ul class="nav justify-content-end">
                <li class="nav-item px-3">
                    <a class="nav-link mb-0 text-light h6" href="halamanListVideo.php">HOME</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link active mb-0 text-light h6" aria-current="page" href="halamanListVideo.php"><b>BELAJAR</b></a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link mb-0 text-light h6" href="artikel1.html"><b>ARTIKEL</b></a>
                </li>
                <li class="nav-item px-3 pr-5">
                    <a class="nav-link mb-0 text-light h6" href="logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- BODY -->
    <div class="container" style="background-color:#ffffff ;">
        <h3 class="p-4 py-5 mb-0" style="text-transform:uppercase ;">
            PAKET BELAJAR <?php echo $namaPaket ?>
        </h3>

        <table class="table table-hover">
            <thead class="text-light" style="background-color: #EB8947;">
                <tr>
                    <th scope="col">Video Pembelajaran</th>
                    <th scope="col">Judul Materi</th>
                    <th scope="col">Mata Pelajaran</th>
                </tr>
            </thead>
            <tbody style="text-align:center ;">
                <?php

                $query1 = "SELECT * FROM video_pembelajaran WHERE Kode_Paket = '$paket'";
                $result1 = mysqli_query($connect, $query1);

                if (mysqli_num_rows($result1) > 0) {
                    while ($row = mysqli_fetch_array($result1)) {
                ?>
                        <tr>
                            <td>
                                <img src="img/<?php echo $row["image"]; ?>" width="250px" alt="">
                            </td>
                            <td><b style="display: flex; align-items: center;"><?php echo $row["Judul"]; ?></b></td>
                            <td>
                                <a href="halamanVideo.php?KodeVideo=<?php echo $row["KodeVideo"]; ?>">
                                    <button class="mt-5 btn btn-info hover-shadow" style="border:0; height: 40px; width: 200px; border-radius:20px;"><b>Watch</b></button>
                                </a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "0 result";
                }
                ?>
            </tbody>
        </table>

        <br>
        <hr><br>

        <div class="container">
            <h1 class="ml-3">Artikel Populer</h1>
            <table>
                <tr>
                    <td class="py-3">
                        <div class="row mx-3">
                            <div class="col-2">
                                <a href="artikel1.html">
                                    <img src="img/LIST 1.jpg" class="card-img-top" alt="artikel1.html" style="border-radius: 20px; width:150px;">
                                </a>
                            </div>
                            <div class="col-10 text-center" style="display: flex; align-items: center;">
                                <h5 class="ml-5 pl-5" style="text-align: justify;">
                                    <a class="text-dark" href="artikel1.html">5 Kegiatan Kelas Virtual Menyenangkan Sebelum Libur Sekolah</a>
                                </h5>
                            </div>
                        </div>
                    </td>
                    <td class="py-3">
                        <div class="row mx-3">
                            <div class="col-2">
                                <a href="artikel2.html">
                                    <img src="img/LIST 2.jpg" class="card-img-top" alt="artikel2.html" style="border-radius: 20px; width:150px;">
                                </a>
                            </div>
                            <div class="col-10 text-center" style="display: flex; align-items: center;">
                                <h5 class="ml-5 pl-5" style="text-align: justify;">
                                    <a class="text-dark" href="artikel2.html">5 Web dan Aplikasi Baca Buku Online Gratis. Legal dan Bermanfaat!</a>
                                </h5>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="py-3">
                        <div class="row mx-3">
                            <div class="col-2">
                                <a href="artikel3.html">
                                    <img src="img/LIST 3.jpg" class="card-img-top" alt="artikel3.html" style="border-radius: 20px; width:150px;">
                                </a>
                            </div>
                            <div class="col-10 text-center" style="display: flex; align-items: center;">
                                <h5 class="ml-5 pl-5" style="text-align: justify;"><a class="text-dark" href="artikel3.html">Mau Ujian Online? Ketahui Dulu Pedoman dan Tipsnya di sini!</a></h5>
                            </div>
                        </div>
                    </td>
                    <td class="py-3" s>
                        <div class="row mx-3">
                            <div class="col-2">
                                <a href="artikel4.html">
                                    <img src="img/LIST 4.jpg" class="card-img-top" alt="artikel4.html" style="border-radius: 20px; width:150px;">
                                </a>
                            </div>
                            <div class="col-10 text-center" style="display: flex; align-items: center;">
                                <h5 class="ml-5 pl-5" style="text-align: justify;"><a class="text-dark" href="artikel3.html">Industri Kampus Vs Kampus Industri</a></h5>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <br><br><br>

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