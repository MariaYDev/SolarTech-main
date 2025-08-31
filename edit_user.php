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

$row = []; 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {

    $id = $_POST["id"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $sql = "UPDATE users SET email='$email', password='$password', role='$role' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        header("location: users.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else if (isset($_GET["id"])) {
  
    $id = $_GET["id"];
    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
        } else {
            echo "User not found!";
            exit;
        }
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    header("location: users.php");
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
     <style>
       
         .sidebar {
             position: fixed;
             top: 0;
             left: 0;
             height: 100%;
             width: 250px;
             background-color: #222222;
             padding-top: 20px;
             padding-left: 20px;
         }

             .sidebar ul.nav flex-column {
                 padding-left: 0;
             }

                 .sidebar ul.nav flex-column li.nav-item {
                     margin-bottom: 10px;
                 }

             .sidebar .nav-link {
                 color: white !important; 
                 font-weight: bold; 
             }

         .content {
             margin-left: 250px;
             padding: 20px;
         }

         .welcome-text {
             text-align: center;
             margin-top: 20px;
         }

             .welcome-text h2 {
                 font-weight: bold;
             }

         .dashboard-text {
             text-align: center;
             margin-top: 20px;
             font-weight: bold;
         }

         .sidebar .logout-btn {
             color: red !important; 
             font-weight: bold; 
             cursor: pointer; 
         }

         .logout-btn:hover {
             color: white !important; 
             text-decoration: none; 
         }
        </style>
</head>
<body>
    <div class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">⚙️ Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="users.php">📑 Manage Users</a>
        </li>
       
    </ul>
     <div style="margin-top: 550px">
        <a class="nav-link logout-btn" href="index.html">🛑 Log out</a>
    </div>
</div>
    
<div class="content">
    </br> </br>
      <center>  <img src="images/edit.png" alt="" width="50"> </center>  

  <center>  <h2>Edit User</h2> </center>
    <form action="edit_user.php" method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo isset($row['password']) ? $row['password'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select class="form-control" id="role" name="role" required>
                <option value="user" <?php echo (isset($row['role']) && $row['role'] == 'user') ? 'selected' : ''; ?>>User</option>
                <option value="admin" <?php echo (isset($row['role']) && $row['role'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
            </select>
        </div>
        </br>
        <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>">

       <center> <button type="submit" class="btn btn-primary">Update</button> </center>
    </form>
</div>

</body>
</html>
