<?php

    include('connection.php');
    session_start();
    $phone = $_SESSION['phone'];
    $new_pass = $_POST['pass'];

    $sql = "UPDATE user SET pass='$new_pass' WHERE phone='$phone'";

    if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $con->error;
    }
?>