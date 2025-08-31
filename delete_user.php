<?php
session_start();

$conn = mysqli_connect(
    "bwfklj7lgile0zzdf6mq-mysql.services.clever-cloud.com", 
    "umwekpqauqifmfeg",                                     
    "yourPasswordHere",                                      
    "bwfklj7lgile0zzdf6mq",                                  
    3306                                                     
);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 



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
