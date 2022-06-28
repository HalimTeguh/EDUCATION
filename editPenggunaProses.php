<?php
    include "myconnection.php";

    $id = $_GET["IdPengguna"];
    $nama = $_GET["Nama"];
    $username = $_GET["Username"];
    $email = $_GET["Email"];
    $password = MD5($_GET["Password"]);
    $alamat = $_GET["Alamat"];
    $nohp = $_GET["NoHp"];
    $kdpaket = $_GET["Kode_Paket"];

    $query1 = "UPDATE login SET Password='$password', Email='$email' WHERE Username='$username'";

    $query2 = "UPDATE pengguna SET Nama='$nama', Alamat='$alamat', NoHp='$nohp', Kode_Paket='$kdpaket' WHERE IdPengguna='$id'";

    if(mysqli_query($connect, $query1)){
        mysqli_query($connect, $query2);
        header('Location:penggunaCRUD.php');
    }else{
        echo "Gagal mengubah data siswa <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>