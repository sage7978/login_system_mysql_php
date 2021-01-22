<?php

    include('connection.php');
    session_start();
    $phone = $_SESSION['phone'];
    $new_email = $_POST['email'];

    $sql = "UPDATE user SET email='$new_email' WHERE phone='$phone'";

    if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $con->error;
    }
?>