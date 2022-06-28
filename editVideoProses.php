<?php
    include "myconnection.php";

    $id = $_GET["KodeVideo"];
    $kdPaket = $_GET["Kode_Paket"];
    $judul = $_GET["Judul"];
    $video = $_GET["Video"];
    $rangkuman = $_GET["Rangkuman"];

    $query = "UPDATE video_pembelajaran SET KodeVideo='$id', Kode_Paket='$kdPaket', Judul='$judul', Video='$video', Rangkuman='$rangkuman' WHERE KodeVideo='$id'";

    if(mysqli_query($connect, $query)){
        header('Location:videoBelajarCRUD.php');
    }else{
        echo "Gagal mengubah data videp pembelajaran <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>