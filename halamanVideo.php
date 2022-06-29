<?php
session_start();
include 'myconnection.php';

$username = $_SESSION['Username'];
$level = $_SESSION['Level'];
$name = $_SESSION['Name'];
if (!empty($username) && ($level == '2')) {
} else {
    echo '<script> window.location="login.php/error=username(invalid)||level(invalid)" </script>';
    header('location:loginbru.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video Pembelajaran</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        button:hover {
            background-color: #FDC534;
        }
    </style>
</head>

<?php
include "myconnection.php";
$paket = $_SESSION['PaketBelajar'];
$kode = $_GET["KodeVideo"];

$query3 = "SELECT * FROM paket_belajar WHERE KodePaket = '$paket'";
$result3 = mysqli_query($connect, $query3);
$row3 = mysqli_fetch_assoc($result3);
?>

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

    <!-- ini Body -->
    <div class="container bg-light p-2" style="flex-grow:1;">
        <h1 class="p-4 py-5 mb-0" style="text-transform:capitalize;">
            <b>Paket Belajar : <?php echo $row3["Nama"]; ?></b>
        </h1>

        <div class="row text-center">
            <div class="col-3 pt-4 pb-3" style="background-color : #FDC534; border-top-left-radius: 20px ;">
                <h5>MATERI</h5>
            </div>
            <div class="col-9 pt-4 pb-3" style="background-color : #FDC534; border-top-right-radius: 20px;">
                <h5>VIDEO PEMBELAJARAN</h5>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-3 pt-3" style="background-color : #FFFAEC; border-bottom-left-radius: 20px ;">
                <table class="table table-hover">
                    <tbody style="text-align:center ;">
                        <?php

                        $query = "SELECT * FROM video_pembelajaran WHERE Kode_Paket = '$paket'";
                        $result = mysqli_query($connect, $query);
                        $indeks = 0;

                        $query2 = "SELECT * FROM video_pembelajaran WHERE KodeVideo = '$kode'";
                        $result2 = mysqli_query($connect, $query2);
                        $video = mysqli_fetch_assoc($result2);



                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                $indeks++;
                        ?>
                                <tr>
                                    <th scope="row">
                                        <a href="halamanVideo.php?KodeVideo=<?php echo $row["KodeVideo"]; ?>">
                                            <button class="btn text-dark py-5 hover-shadow" style="border:0 ;"><b><?php echo $row["Judul"]; ?></b></button></a>
                                    </th>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "0 result";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-9 pt-3" style="background-color : #ffffff; border-bottom-right-radius: 20px;">
                <div class="embed-responsive embed-responsive-16by9 my-5">
                    <iframe class="embed-responsive-item" src="<?php echo $video["Video"]; ?>" style="width: 800px; height:450px; border-radius:20px;" allowfullscreen></iframe>
                </div>
                <div class="container">
                    <h3><?php echo $video["Judul"]; ?></h3>
                    <p style="text-align:justify ;"><?php echo $video["Rangkuman"]; ?></p>
                    <a href="halamanListVideo.php">
                        <button class="btn btn-danger hover-shadow" style="border:0; height: 40px; width: 200px; border-radius:20px;"><b>BACK</b></button>
                    </a>
                </div>
            </div>
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