<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);


$conn = mysqli_connect("localhost", "root", "", "web3proj");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $password = $_POST['Password'];

  
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['password']; 

        if ($password === $stored_password) {
         
            $_SESSION['userid'] = $row['id'];
            $_SESSION['role'] = $row['role'];

     
            if ($row['role'] == 'user') {
                header("Location: user_page.php");
                exit();
            } elseif ($row['role'] == 'admin') {
                header("Location: dashboard.php");
                exit();
            } else {
 
                echo "Unexpected role: " . $row['role'];
                exit();
            }
        } else {
 
            echo "Invalid email or password.";
            header("Location: signin.html");
            exit();
        }
    } else {
   
        echo "Invalid email or password.";
        header("Location: signin.html");
        exit();
    }
}


mysqli_close($conn);
?>
