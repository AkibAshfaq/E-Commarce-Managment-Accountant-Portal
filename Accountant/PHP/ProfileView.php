<?php
    session_start();
    include 'ServerStart.php';
    
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $dept = $_SESSION['department'];
    $jdate = $_SESSION['joiningdate'];

    echo "<script>profileLoad('$id','$name', '$email', '$phone', '$dept', '$jdate');</script>";
?>