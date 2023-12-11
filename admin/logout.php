<?php
    session_start();
    session_destroy();

    echo '<script>alert("Anda Telah Logout")</script>';
    // window.location="index.php";';
    header("location: index.php");
?>