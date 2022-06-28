<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Video Pembelajaran</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                    <a class="nav-link mb-0 text-light h6" href="halamanAdmin.php">HOME</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link active mb-0 text-light h6" aria-current="page" href="videoBelajarCRUD.php"><b>SUNTING</b></a>
                </li>
                <li class="nav-item px-3 pr-5">
                    <a class="nav-link mb-0 text-light h6" href="logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- ini Body -->
    <div class="container bg-light p-2" style="flex-grow:1;">
        <h3 class="p-4 py-5 mb-0">
            SELAMAT DATANG ADMINISTRATOR
        </h3>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item px-3" role="presentation">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="pegawaiCRUD.php" role="tab" aria-controls="home" aria-selected="true" style="border-top-left-radius:10px; border-top-right-radius:10px; color:black;">Pegawai</a>
            </li>
            <li class="nav-item px-3" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="paketBelajarCRUD.php" role="tab" aria-controls="profile" aria-selected="false" style="border-top-left-radius:10px; border-top-right-radius:10px; color:black;">Paket Belajar</a>
            </li>
            <li class="nav-item px-3" role="presentation">
                <a class="nav-link active" id="contact-tab" data-toggle="tab" href="videoBelajarCRUD.php" role="tab" aria-controls="contact" aria-selected="false" style="border-top-left-radius:10px; border-top-right-radius:10px; color:black;">Video Pembelajaran</a>
            </li>
            <li class="nav-item px-3" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="artikelCRUD.php" role="tab" aria-controls="contact" aria-selected="false" style="border-top-left-radius:10px; border-top-right-radius:10px; color:black;">Artikel</a>
            </li>
        </ul>
        <div class="tab-content p-2" id="myTabContent" style="background-color:#ffffff ;">
            <div class="tab-pane fade" id="pegawaiCRUD" role="tabpanel" aria-labelledby="home-tab">
                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        <h1>CRUD Pegawai</h1>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius:50px">
                            <button class="btn btn-info mx-1" type="submit" style="border-radius:50px">Search</button>
                            <button class="btn btn-success mr-1" type="submit" style="width: 300px; border-radius:50px">Tambah Pegawai</button>
                        </form>
                    </div>
                    <hr>
                </nav>
                <table class="table table-hover">
                    <thead class="text-light" style="background-color: #EB8947;">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nomor Hp</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">Gaji</th>
                            <th scope="col">Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "myconnection.php";

                        $query = "SELECT * FROM pegawai";
                        $result = mysqli_query($connect, $query);
                        $indeks = 0;

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                $indeks++;
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $indeks ?></th>
                                    <td><?php echo $row["Nama"]; ?></td>
                                    <td><?php echo $row["Alamat"]; ?></td>
                                    <td><?php echo $row["NoHp"]; ?></td>
                                    <td><?php echo $row["Posisi"]; ?></td>
                                    <td><?php echo $row["Gaji"]; ?></td>
                                    <td>
                                        <a href="detailpegawai.php?id_buku=<?php echo $row["IdPegawai"]; ?>">
                                            <button class="btn btn-info mx-1 ml-3" style="border-radius:50px">Detail</button></a>
                                        <a href="editpegawai.php?id_buku=<?php echo $row["IdPegawai"]; ?>">
                                            <button class="btn btn-warning mx-1" style="border-radius:50px">Edit</button></a>
                                        <a href="deletepegawi.php?id_buku=<?php echo $row["IdPegawai"]; ?>">
                                            <button class="btn btn-danger mx-1" style="border-radius:50px">Hapus</button></a>
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
            </div>
            <div class="tab-pane fade" id="paketBelajarCRUD" role="tabpanel" aria-labelledby="profile-tab">
                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        <h1>CRUD Paket Belajar</h1>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius:50px">
                            <button class="btn btn-info mx-1" type="submit" style="border-radius:50px">Search</button>
                            <button class="btn btn-success mr-1" type="submit" style="width: 300px; border-radius:50px">Tambah Pegawai</button>
                        </form>
                    </div>
                    <hr>
                </nav>
                <table class="table table-hover">
                    <thead class="text-light" style="background-color: #EB8947;">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Paket</th>
                            <th scope="col">Nama</th>
                            <th scope="col" style="width: 500px;">Benefit</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody style="text-align:center ;">
                        <?php
                        include "myconnection.php";

                        $query = "SELECT * FROM paket_belajar";
                        $result = mysqli_query($connect, $query);
                        $indeks = 0;

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                $indeks++;
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $indeks ?></th>
                                    <td><?php echo $row["KodePaket"]; ?></td>
                                    <td><?php echo $row["Nama"]; ?></td>
                                    <td style="text-align:justify ;"><?php echo $row["Benefit"]; ?></td>
                                    <td><?php echo $row["Harga"]; ?></td>
                                    <td>
                                        <a href="detailpegawai.php?id_buku=<?php echo $row["KodePaket"]; ?>">
                                            <button class="btn btn-info mx-1 ml-3" style="border-radius:50px">Detail</button></a>
                                        <a href="editpegawai.php?id_buku=<?php echo $row["KodePaket"]; ?>">
                                            <button class="btn btn-warning mx-1" style="border-radius:50px">Edit</button></a>
                                        <a href="deletepegawi.php?id_buku=<?php echo $row["KodePaket"]; ?>">
                                            <button class="btn btn-danger mx-1" style="border-radius:50px">Hapus</button></a>
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
            </div>
            <div class="tab-pane fade show active" id="videoBelajarCRUD" role="tabpanel" aria-labelledby="contact-tab">
                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        <h2>CRUD Video Pembelajaran</h2>
                        <form action="searchVideo.php" class="d-flex">
                            <input class="form-control ml-5" type="search" placeholder="Search" name="cariVideo" aria-label="Search" style="width: 300px; border-radius:50px">
                            <button class="btn btn-info mx-1" type="submit" style="border-radius:50px">Search</button>
                        </form>
                        <form action="tambahVideo.html">
                            <button class="btn btn-success mr-1" type="submit" style="width: 200px; border-radius:50px">Tambah Video</button>
                        </form>
                    </div>
                    <hr>
                </nav>
                <table class="table table-hover">
                    <thead class="text-light" style="background-color: #EB8947; text-align:center;">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width:80px;">Kode Video</th>
                            <th scope="col" style="width:110px;">Kode Paket Belajar</th>
                            <th scope="col" style="width:200px;">Judul</th>
                            <th scope="col" style="width:200px;">Link Video</th>
                            <th scope="col">Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody style="text-align:center;">
                        <?php
                        include "myconnection.php";
                        $nama = $_GET["cariVideo"];

                        $query = "SELECT * FROM video_pembelajaran WHERE Judul LIKE'%$nama%'";
                        $result = mysqli_query($connect, $query);
                        $indeks = 0;

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                $indeks++;
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $indeks ?></th>
                                    <td><?php echo $row["KodeVideo"]; ?></td>
                                    <td><?php echo $row["Kode_Paket"]; ?></td>
                                    <td style="text-align:justify;"><?php echo $row["Judul"]; ?></td>
                                    <td><a href="<?php echo $row["Video"]; ?>"><?php echo $row["Video"]; ?></a></td>
                                    <td>
                                        <a href="detailVideo.php?KodeVideo=<?php echo $row["KodeVideo"]; ?>">
                                            <button class="btn btn-info mx-1 ml-3" style="border-radius:50px">Detail</button></a>
                                        <a href="editVideo.php?KodeVideo=<?php echo $row["KodeVideo"]; ?>">
                                            <button class="btn btn-warning mx-1" style="border-radius:50px">Edit</button></a>
                                        <a href="deleteVideo.php?KodeVideo=<?php echo $row["KodeVideo"]; ?>">
                                            <button class="btn btn-danger mx-1" style="border-radius:50px">Hapus</button></a>
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
            </div>
            <div class="tab-pane fade" id="artikelCRUD" role="tabpanel" aria-labelledby="contact-tab">
                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        <h2>CRUD Artikel</h2>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius:50px">
                            <button class="btn btn-info mx-1" type="submit" style="border-radius:50px">Search</button>
                            <button class="btn btn-success mr-1" type="submit" style="width: 300px; border-radius:50px">Tambah Pegawai</button>
                        </form>
                    </div>
                    <hr>
                </nav>
                <table class="table table-hover">
                    <thead class="text-light" style="background-color: #EB8947; text-align:center;">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width:400px;">Judul</th>
                            <th scope="col" style="width:200px;">Penulis</th>
                            <th scope="col">Tanggal Publish</th>
                            <th scope="col">Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody style="text-align:center;">
                        <?php
                        include "myconnection.php";

                        $query = "SELECT * FROM artikel";
                        $result = mysqli_query($connect, $query);
                        $indeks = 0;

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                $indeks++;
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $indeks ?></th>
                                    <td style="text-align:justify;"><?php echo $row["Judul"]; ?></td>
                                    <td><?php echo $row["Penulis"]; ?></td>
                                    <td><?php echo $row["Publish"]; ?></td>
                                    <td>
                                        <a href="detailpegawai.php?id_buku=<?php echo $row["NoArtikel"]; ?>">
                                            <button class="btn btn-info mx-1 ml-3" style="border-radius:50px">Detail</button></a>
                                        <a href="editpegawai.php?id_buku=<?php echo $row["NoArtikel"]; ?>">
                                            <button class="btn btn-warning mx-1" style="border-radius:50px">Edit</button></a>
                                        <a href="deletepegawi.php?id_buku=<?php echo $row["NoArtikel"]; ?>">
                                            <button class="btn btn-danger mx-1" style="border-radius:50px">Hapus</button></a>
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
            </div>
        </div>

    </div>

    <!-- ini Footer -->
    <div class="footer-copyright text-center py-3" style="background-color: #EB8947; position:relative; bottom:0; width:100%">
        <p class="text-light">© 2022 EDUCATION Landing Page. All rights reserved</p>
    </div>
</body>

</html>