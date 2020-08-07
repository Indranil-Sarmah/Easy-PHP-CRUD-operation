<?php

    $conn = mysqli_connect("localhost","root","","crud");
    $id = $_GET['id'];

    $sql ="delete from student where id = '$id'";

    mysqli_query($conn,$sql);

    header('location:index.php');
    die();

?>