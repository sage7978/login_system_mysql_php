<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "food";

    $con = mysqli_connect($server, $user, $password, $db_name);  
    if(mysqli_connect_error()){
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }

?>









<!-- 
INSERT INTO `user` (`name`, `phone`, `email`, `gender`, `pass`) VALUES ('satish', '7978982867', 'test@gmail.com', 'male', '123456'); -->