<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Login Success</title>
</head>
<body>
    <h1>Logged in Successfully</h1>
    <div class="container">
            <?php
            include('connection.php');

            session_start();
            $phone = $_SESSION['phone'];
            $sql = "select * from user where phone='$phone'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["name"];
                echo "<br>Phone Number: " . $row["phone"];
                echo "<br>Email id: " . $row["email"];
                echo "<br>Gender: ". $row['gender'];
                echo "<br>";
            }
            } else {
            echo "0 results";
            }
        ?>
         <a href="update.html">Update your details here</a>
    </div>
</body>
</html>