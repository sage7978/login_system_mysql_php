<?php

    include('connection.php');
    session_start();
    $phone = $_SESSION['phone'];
    $new_name = $_POST['name'];

    $sql = "UPDATE user SET name='$new_name' WHERE phone='$phone'";

    if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $con->error;
    }
?>