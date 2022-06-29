<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Video Pembelajaran</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light d-flex flex-column align-items-stretch" style="min-height:100vh;">
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
                    <a class="nav-link mb-0 text-light h6" href="homeUser.php">HOME</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link active mb-0 text-light h6" aria-current="page" href="artikel1.html"><b>Artikel</b></a>
                </li>
                <li class="nav-item px-3 pr-5">
                    <a class="nav-link mb-0 text-light h6" href="loginbru.php">LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- ini Body -->
    <div class="container p-2" style="background-color: #ffffff; flex-grow:1;">
        <h3 class="p-4 py-5 mb-0">
            SELAMAT DATANG ADMINISTRATOR
        </h3>

        <?php
        include "myconnection.php";

        $nama = $_GET["Nama"];
        $username = $_GET["Username"];
        $email = $_GET["Email"];
        $password = MD5($_GET["Password"]);
        $alamat = $_GET["Alamat"];
        $nohp = $_GET["NoHp"];
        $kdpaket = $_GET["PaketBelajar"];
        $KodePromo = $_GET["KodePromo"];
        $Pembayaran = $_GET["Pembayaran"];

        $query = "INSERT INTO login(Username, Password, Email, Level)
            VALUES('$username','$password', '$email', 2)";

        $query2 = "DELETE FROM login WHERE Username='$username'";

        mysqli_query($connect, $query);

        $query1 = "INSERT INTO pengguna(Nama, Alamat, NoHp, Kode_Paket, Username)
            VALUES('$nama', '$alamat', '$nohp', '$kdpaket', '$username')";

        if (mysqli_query($connect, $query1)) {
            if ($kdpaket == "P1") {
                if ($KodePromo == "jawara_bisa" || $KodePromo == "bahagia_selalu" || $KodePromo == "sama_sama") {
                    $jumlahTransaksi = 3000000;
                    $jumlahPotongan = 1000000;
                    $total = $jumlahTransaksi - $jumlahPotongan;
                } else {
                    $jumlahTransaksi = 3000000;
                    $jumlahPotongan = "-";
                    $total = $jumlahTransaksi;
                }
            } else if ($kdpaket == "P2") {
                if ($KodePromo == "jawara_bisa" || $KodePromo == "bahagia_selalu" || $KodePromo == "sama_sama") {
                    $jumlahTransaksi = 2500000;
                    $jumlahPotongan = 1000000;
                    $total = $jumlahTransaksi - $jumlahPotongan;
                } else {
                    $jumlahTransaksi = 2500000;
                    $jumlahPotongan = "-";
                    $total = $jumlahTransaksi;
                }
            } else {
                if ($KodePromo == "jawara_bisa" || $KodePromo == "bahagia_selalu" || $KodePromo == "sama_sama") {
                    $jumlahTransaksi = 1500000;
                    $jumlahPotongan = 1000000;
                    $total = $jumlahTransaksi - $jumlahPotongan;
                } else {
                    $jumlahTransaksi = 1500000;
                    $jumlahPotongan = "-";
                    $total = $jumlahTransaksi;
                }
            }

            echo '<table class="table">
                    <tbody>
                        <tr>
                            <td>Nama Pengguna</td>
                            <td>' . $nama . '</td>
                        </tr>';
            echo '<tr>
                            <td>Alamat</td>
                            <td>' . $alamat . '</td>
                        </tr>';
            echo '<tr>
                            <td>No Telepon</td>
                            <td>' . $nohp . '</td>
                        </tr>';
            echo '<tr>
                            <td>Paket Belajar</td>
                            <td>' . $kdpaket . '</td>
                        </tr>';
            echo '<tr>
                            <td>Metode Pembayaran</td>
                            <td>' . $Pembayaran . '</td>
                        </tr>';
            echo '<tr>
                            <td>Total Harga</td>
                            <td>' . $jumlahTransaksi . '</td>
                        </tr>';
            echo '<tr>
                            <td>Total Diskon (Kode Promo)</td>
                            <td>' . $jumlahPotongan . '</td>
                        </tr>';
            echo '<tr>
                            <td>Total Pembayaran</td>
                            <td>' . $total . '</td>
                        </tr>';
            echo '</tbody>
                  </table>';
        } else {
            mysqli_query($connect, $query2);
            echo "Gagal mengubah data siswa <br>" . mysqli_error($connect);
        }


        mysqli_close($connect);
        ?>

        <a href="loginbru.php"><button type="submit" class="btn btn-primary mb-5" style="border-radius:50px">Bayar</button></a>
    </div>



    <!-- ini Footer -->
    <div class="footer-copyright text-center py-3" style="background-color: #EB8947; position:relative; bottom:0; width:100%">
        <p class="text-light">© 2022 EDUCATION Landing Page. All rights reserved</p>
    </div>
</body>

</html>