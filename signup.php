<?php

$email = $_POST["email"];
$pass = $_POST["password"];
$pass = md5($pass);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT email FROM users WHERE email='$email' ";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    echo "Email is already used";
}
else
{
    $sql = "INSERT INTO users (email, password)
    VALUES ('$email' , '$pass')";

    if ($conn->query($sql) === TRUE)
    {
        echo "Your account has been created successfully";
        echo "<p>We are now redirecting you</p>";
        echo "<meta http-equiv='refresh' content='3;login.html' />";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();



?>