<?php

    include('connect.php');
    
    $id = $_GET['id'];

    $sql ="delete from student where id = '$id'";

    mysqli_query($conn,$sql);

    header('location:index.php');
    die();

?>