<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Document</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="assets/dist/css/floating-labels.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>

<body class="bg-light d-flex flex-column align-items-stretch" style="min-height:100vh ;">
    <!-- HEADER -->
    <nav class="navbar mt-0" style="background-color: #EB8947;">
        <div class="container">
            <ul class="nav justify-content-start">
                <li class="nav-item">
                    <a class="navbar-brand mb-0 h1 " href="homeUser.html" style="color: #ffffff;">
                        <h3 class="py-3 pl-3 mb-0">EDUCATION</h3>
                    </a>
                </li>
            </ul>
            <ul class="nav justify-content-end">
                <li class="nav-item px-3">
                    <a class="nav-link mb-0 text-light h6" href="homeUser.php">HOME</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link mb-0 text-light h6 disabled" aria-current="page" href="homeUser.php">BELAJAR</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link mb-0 text-light h6" aria-current="page" href="artikel1.html">ARTIKEL</a>
                </li>
                <li class="nav-item px-3 pr-5">
                    <a class="nav-link active mb-0 text-light h6" href="loginbru.php"><b>LOGIN</b></a>
                </li>
            </ul>
        </div>
    </nav>

    <?php
    if (isset($_GET["error"])) {
        $error = $_GET["error"];
    } else {
        $error = "";
    }
    if ($error == "gagal") {
        echo "<script> alert ('login akun Gagal');
                </script>";
    }
    ?>
    <br><br><br><br><br>

    <!-- ini Body -->
    <div class="container bg-light p-5" style="flex-grow:1;">
        <form class="form-signin" action="prosesLogin.php" method="POST">
            <div class="text-center mb-4">
                <h1 class="h3 mb-3 font-weight-normal"><b>Form Login</b></h1>
                <p>Masukkan Username dan Password anda dengan Benar!</p>
            </div>
            <div class="form-label-group">
                <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda!" required autofocus>
                <label>Masukkan Username Anda!</label>
            </div>

            <div class="form-label-group">
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda!" required>
                <label>Masukkan Password Anda!</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
            <p class="mt-3">
                Belum punya akun ?
                <button type="button" class="btn btn-primary btn-sm">
                    <a href="transaksiA.html" style="text-decoration: none; color: white;">Daftar disini</a>
                </button>
            </p>
            <p class="mt-5 mb-3 text-muted text-center">&copy; Ruang Siswa 2022-<?= date('Y') ?></p>
        </form>
    </div>
    <br><br><br><br><br><br>

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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>