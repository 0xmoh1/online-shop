<?php
    include('config.php');

    $ID =$_GET['id'];
    mysqli_query($con, "DELETE FROM prod1 WHERE id=$ID");
    header('location: products.php');
?>