<?php
session_start();


if (!isset($_SESSION['userid']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: signin.html"); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 

    <title>Admin Dashboard</title>
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
    <div class="welcome-text">
     
        </br>
        <img src="images/dashboard.png" alt="" width="100">

        <h2>  Welcome back, Administrator! </h2>
    </div>
   
   
    </br>
   <center>  <p>About your Admin account:</p> </center> 
    <br> </br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
              
                <tr>
                    <td>1</td>
                    <td>admin@example.com</td>
                    <td>**********</td>
                    <td>Admin</td>

                </tr>
            </tbody>
        </table>
    </div>
    </br> </br>
     <div class="dashboard-text">
        <p>🛠️ Please proceed to the Manage Users section for account alteration. 🛠️</p>
    </div>
</div>

</body>
</html>

