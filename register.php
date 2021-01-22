<?php
    include ('connection.php');
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `food`.`user` (`name`, `phone`, `email`, `gender`, `pass`) VALUES ('$name', '$phone', '$email', '$gender', '$pass');"  ;  

    if($con->query($sql) == true){
        echo "<h1><center>Sign Up successful</center></h1>";
    }
    else{
        echo "ERROR: $sql <br> $con->error"; 
    }

    $con->close();

?>