<?php
$host = "bwfklj7lgile0zzdf6mq-mysql.services.clever-cloud.com";
$user = "umwekpqauqifmfeg";
$pass = "yourPasswordHere";
$db   = "bwfklj7lgile0zzdf6mq";
$port = 3306;

// Create connection
$conn = new mysqli($host, $user, $pass, $db, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "✅ Connected successfully to Clever Cloud MySQL!";
}
?>
