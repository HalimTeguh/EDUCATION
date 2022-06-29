<?php
    session_start();
    include 'myconnection.php';
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM login WHERE Username='$username' && Password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    
    if($result){
        if($row['Level'] == "1"){
            $pegawai = "SELECT * FROM login l RIGHT OUTER JOIN pegawai p ON p.Username = l.Username WHERE l.Username = '$username';";
            $data = mysqli_query($connect, $pegawai);
            $nama = mysqli_fetch_assoc($data);
            $_SESSION['Username'] = $username;
            $_SESSION['Level'] = $row['Level'];
            $_SESSION['Name'] = $nama['Nama'];
            header('location: halamanAdmin.php');
        }else if($row['Level'] == "2"){
            $pegawai = "SELECT * FROM pengguna WHERE Username='$username'";
            $data = mysqli_query($connect, $query);
            $nama = mysqli_fetch_assoc($data);
            $_SESSION['Username'] = $username;
            $_SESSION['Level'] = $row['Level'];
            $_SESSION['Name'] = $nama['Nama'];
            header('location: halamanListVideo.php');
        }
    }else{
        echo '<script> alert("Username dan Password yang Anda masukan salah") </script>';
        echo '<script> window.location="loginbru.php/password=$password" </script>';
    }
?>
