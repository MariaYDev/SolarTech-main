<?php
$dsn = "mysql:host=localhost;dbname=web3proj";
$dbusername = "root";
$dbpass = "";
try {
    $pdo = new PDO($dsn, $dbusername, $dbpass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}
