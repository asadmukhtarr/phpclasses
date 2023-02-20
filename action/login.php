<?php 
    // "" , '' , ``,// 
    $email = $_GET['email'];
    $password = $_GET['password'];
    include('cn.php');
    $query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($cn,$query) or die('cant run query');
    $row = mysqli_num_rows($result);
    if($row > 0){ // problem
        $r = mysqli_fetch_array($result);
        $user = $r['name'];
        session_start();
        $_SESSION['user'] = $user;
        header('location:../home.php');
    } else {
        $error = "Cant fount user";
        header('location:../index.php?error='.$error);
    }
?>