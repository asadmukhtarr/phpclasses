<?php
    $id = $_GET['id']; // get
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    include('cn.php'); // connection file ..
    $query = "UPDATE `users` SET name='$name' , email='$email' , password='$password' WHERE id='$id'";
    mysqli_query($cn,$query) or die('Not Working With Query'.mysqli_error($cn));
    $message = "Data Is Updated";
    header("Location:../home.php?message=$message");
?>