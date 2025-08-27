<?php
session_start();


if (!isset($_SESSION['userid']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: signin.html"); 
    exit();
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web3proj";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);


if (!$result) {
    die("Error fetching users: " . $conn->error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    
    .action-buttons {
        display: inline-block;
    }


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

  
    .container {
        margin-left: 300px; 
        text-align: center; 
        margin-top: 20px; 

    }

    h2 {
        font-weight: bold; 
        margin-top: 10px; 
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
</div>
<br />
<div class="container mt-4">
      <img src="images/users.png" alt="" width="50">
    <h2>Manage Users</h2>
    <br> <br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Action</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["password"] . "</td>";
                        echo "<td>" . $row["role"] . "</td>";
                        echo "<td class='action-buttons'>";
                        echo "<a href='edit_user.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm mr-2'>Edit</a>";
                        echo "<a href='delete_user.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No users found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>

<?php
$conn->close();
?>
