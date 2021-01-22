<?php

    include('connection.php');
    session_start();
    $phone = $_SESSION['phone'];
    $new_gender = $_POST['gender'];

    $sql = "UPDATE user SET gender='$new_gender' WHERE phone='$phone'";

    if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $con->error;
    }
?>