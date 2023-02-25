<?php 
    $id = $_GET['id'];
    // connectoins
    include('cn.php');
    $query = "DELETE FROM `users` WHERE id='$id'";
    mysqli_query($cn,$query) or die('cant run query');
    header("location:../home.php?message='User Deleted Successfuly'");
?>