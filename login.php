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


$sql = "SELECT password FROM users WHERE email='$email' ";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    if($pass==$row['password'])
    {
        echo "Login Successful";
    }
    else
    {
        echo "Invalid password";
    }


}
else
{
    echo "Invalid Email";
}

$conn->close();



?>