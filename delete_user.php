<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_system";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["id"])) {
  
    $id = $_GET["id"];
    $sql = "DELETE FROM users WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("location: users.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    header("location: users.php");
    exit;
}

$conn->close();
?>
