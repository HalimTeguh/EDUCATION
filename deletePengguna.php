<?php
    include "myconnection.php";

    $id = $_GET['IdPengguna'];

    $query = "SELECT * FROM pengguna p RIGHT OUTER JOIN login l ON l.Username = p.Username WHERE p.IdPengguna = '$id'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $username = $row['Username'];

    $query1 = "DELETE FROM pengguna WHERE IdPengguna='$id'";
    $query2 = "DELETE FROM login WHERE Username='$username'";

    if(mysqli_query($connect, $query1)){
        mysqli_query($connect, $query2);
        header('Location:penggunaCRUD.php');
    }else{
        echo "Data video gagal dihapus <br>"; 
        mysqli_error($connect);
    }

    mysqli_close($connect);
?>