<?php
    session_start();
    session_destroy();

    echo '<script> alert("you have successfully logged out") </script>';
    echo '<script> window.location="homeUser.php" </script>';
?>