<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Artikel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light d-flex flex-column align-items-stretch" style="min-height:100vh ;">
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
                    <a class="nav-link mb-0 text-light h6" href="halamanAdmin.php">HOME</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link active mb-0 text-light h6" aria-current="page" href="artikelCRUD.php"><b>SUNTING</b></a>
                </li>
                <li class="nav-item px-3 pr-5">
                    <a class="nav-link mb-0 text-light h6" href="logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- ini Body -->
    <div class="container p-2" style="background-color: #ffffff; flex-grow:1;">
        <?php
        include "myconnection.php";

        $id = $_GET["NoArtikel"];

        $query = "SELECT * FROM artikel WHERE NoArtikel='$id'";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>

                <h3 class="p-4 py-5 mb-0">
                    Detail Data Artikel <?php echo $row["NoArtikel"]; ?>
                </h3>
                <div>
                    <table class="mx-5">
                        <tr>
                            <td class="pb-3">Judul Artikel</td>
                            <td class="pl-5"> : <?php echo $row["Judul"]; ?></td>
                        </tr>
                        <tr>
                            <td class="pb-3">Nama Penulis</td>
                            <td class="pl-5"> : <?php echo $row["Penulis"]; ?></td>
                        </tr>
                        <tr>
                            <td class="pb-3">Tanggal Publish</td>
                            <td class="pl-5"> : <?php echo $row["Publish"]; ?></td>
                        </tr>
                        <tr>
                            <td class="pb-3">Link Artikel</td>
                            <td class="pl-5"> : <?php echo $row["Link"]; ?></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                if (isset($_SESSION["username"])) {
                                ?>
                                    <a href="artikelCRUD.php"><button class="btn btn-danger mx-1" style="border-radius:50px">BACK</button></a>
                                <?php
                                } else {
                                ?>
                                    <a href="artikelCRUD.php"><button class="btn btn-danger mx-1" style="border-radius:50px">BACK</button></a>
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                <?php
            }
        } else {
            echo "0 result";
        }
                ?>
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