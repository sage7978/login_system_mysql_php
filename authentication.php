<?php
    include('connection.php');
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];

    session_start();
    $_SESSION['phone'] = $phone;

    // Making it secure against mysql injection
    $phone = stripcslashes($phone);
    $pass = stripcslashes($pass);
    $phone = mysqli_real_escape_string($con, $phone);
    $pass = mysqli_real_escape_string($con, $pass);

    // Fetching SQL table
    $sql = "select * from user where phone='$phone' and pass = '$pass' ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count==1){
        header("Location: http://localhost:7882/fos/success.php");
    }
    else {
        header("Location: http://localhost:7882/fos/wrongPass.html"); 
    } 



?>