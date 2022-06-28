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

    $query = "INSERT INTO login(Username, Password, Email, Level)
            VALUES('$username','$password', '$email', 2)";

    $query2 = "DELETE FROM login WHERE Username='$username'";

    mysqli_query($connect, $query);

    $query1 = "INSERT INTO pengguna(IdPengguna, Nama, Alamat, NoHp, Kode_Paket, Username)
            VALUES('$id','$nama', '$alamat', '$nohp', '$kdpaket', '$username')";

    if(mysqli_query($connect, $query1)){
        header('Location:penggunaCRUD.php');
    }else{
        mysqli_query($connect, $query2);
        echo "Gagal mengubah data siswa <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
