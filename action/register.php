<?php 
    // $_POST , $_GET , $_DELETE
    $name     = $_POST['name']; // for get name
    $email    = $_POST['email']; // for get email
    $password = $_POST['password']; // for get password
    // connection with mysql ..
    include('cn.php');
    $query = "INSERT INTO `users`(name,email,password) VALUES ('$name','$email','$password')";
    mysqli_query($cn,$query) or die('Cant run query');
    header('location:../register.php');
?> 