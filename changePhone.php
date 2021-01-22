<?php

    include('connection.php');
    session_start();
    $phone = $_SESSION['phone'];
    $new_phone = $_POST['phone'];

    $sql = "UPDATE user SET phone='$new_phone' WHERE phone='$phone'";

    if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $con->error;
    }
?>