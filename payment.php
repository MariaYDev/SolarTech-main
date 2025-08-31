<?php session_start();
require 'index.php';
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
 ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        ul {
            list-style-type: none;
        }
    </style>

</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" id="angle-right" viewBox="0 0 32 32">
            <path fill="currentColor" d="M12.969 4.281L11.53 5.72L21.812 16l-10.28 10.281l1.437 1.438l11-11l.687-.719l-.687-.719z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="angle-left" viewBox="0 0 32 32">
            <path fill="currentColor" d="m19.031 4.281l-11 11l-.687.719l.687.719l11 11l1.438-1.438L10.187 16L20.47 5.719z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="chevron-down" viewBox="0 0 24 24">
            <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6l1.41-1.42Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 32 32">
            <path fill="currentColor" d="M18.719 6.781L17.28 8.22L24.063 15H4v2h20.063l-6.782 6.781l1.438 1.438l8.5-8.5l.687-.719l-.687-.719z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-left" viewBox="0 0 32 32">
            <path fill="currentColor" d="m13.281 6.781l-8.5 8.5l-.687.719l.687.719l8.5 8.5l1.438-1.438L7.938 17H28v-2H7.937l6.782-6.781z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="play" viewBox="0 0 24 24">
            <path fill="currentColor" d="M8 5.14v14l11-7l-11-7Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
            <path fill="currentColor" d="M9.198 21.5h4v-8.01h3.604l.396-3.98h-4V7.5a1 1 0 0 1 1-1h3v-4h-3a5 5 0 0 0-5 5v2.01h-2l-.396 3.98h2.396v8.01Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 32 32">
            <path fill="currentColor" d="M29.41 9.26a3.5 3.5 0 0 0-2.47-2.47C24.76 6.2 16 6.2 16 6.2s-8.76 0-10.94.59a3.5 3.5 0 0 0-2.47 2.47A36.13 36.13 0 0 0 2 16a36.13 36.13 0 0 0 .59 6.74a3.5 3.5 0 0 0 2.47 2.47c2.18.59 10.94.59 10.94.59s8.76 0 10.94-.59a3.5 3.5 0 0 0 2.47-2.47A36.13 36.13 0 0 0 30 16a36.13 36.13 0 0 0-.59-6.74ZM13.2 20.2v-8.4l7.27 4.2Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 256 256">
            <path fill="currentColor" d="m245.66 77.66l-29.9 29.9C209.72 177.58 150.67 232 80 232c-14.52 0-26.49-2.3-35.58-6.84c-7.33-3.67-10.33-7.6-11.08-8.72a8 8 0 0 1 3.85-11.93c.26-.1 24.24-9.31 39.47-26.84a110.93 110.93 0 0 1-21.88-24.2c-12.4-18.41-26.28-50.39-22-98.18a8 8 0 0 1 13.65-4.92c.35.35 33.28 33.1 73.54 43.72V88a47.87 47.87 0 0 1 14.36-34.3A46.87 46.87 0 0 1 168.1 40a48.66 48.66 0 0 1 41.47 24H240a8 8 0 0 1 5.66 13.66Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
            <path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="linkedin" viewBox="0 0 24 24">
            <path fill="currentColor" d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z" />
        </symbol>
    </svg>

    <div id="preload">
        <div id="load"></div>
    </div>
    <header id="header" class="site-header">
        <nav id="header-nav" class="navbar navbar-expand-lg px-3">
            <div class="container">
                <a class="navbar-brand d-lg-none" href="index.html">
                    <img src="images/main-logo.png" class="logo">
                </a>
                <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">Menu</button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
                    <div class="offcanvas-header px-4 pb-0">
                        <a class="navbar-brand" href="index.html">
                            <img src="images/main-logo.png" class="logo">
                        </a>
                        <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul id="navbar" class="navbar-nav w-100 d-flex justify-content-center align-items-center">

                            <li class="nav-item">
                                <a class="nav-link ms-0" href="aboutus.html">About<span style="margin-right: 5px;"></span>Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-0" href="contactus.html">Contact<span style="margin-right: 5px;"></span>Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-0" href=""></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-0" href=""></a>
                            </li>

                            <li class="nav-item">
                                <h5><a class="nav-link ms-0" href="index.html" style="margin-right: 5px;">SOLAR<span style="margin-left: 5px; margin-right: 5px;">TECH</span></a></h5>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-0" href=""></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ms-0" href=""></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-0" href="catalogue.html">Catalogue</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ms-0" href="signin.html">Sign<span style="margin-right: 5px;"></span>In</a>
                            </li>

                        </ul>


                    </div>
                    </li>
                    </ul>
                    </ul>
                </div>
            </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid" style="padding-top: 10%;">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11">
                <div class="card card0 rounded-0">
                    <div class="row">
                        <div class="col-md-5 d-md-block d-none p-0 box">
                            <div class="card rounded-0 border-0 card1" id="bill">
                                <h3 id="heading1">Payment Summary</h3>
                                <span id="items">

                                    <?php
                                    if (isset($_POST['item'], $_POST['quant'], $_POST['gov'], $_POST['dist'], $_POST['city'], $_POST['zip'])) {
                                        $item = $_POST['item'];
                                        $quant = $_POST['quant'];
                                        $gov = $_POST['gov'];
                                        $dist = $_POST['dist'];
                                        $city = $_POST['city'];
                                        $zip = $_POST['zip'];

                                        if (!is_array($item) || !is_array($quant) || count($item) !== count($quant)) {
                                            die("Invalid input");
                                        }


                                        for ($i = 0; $i < count($quant); $i++) {
                                            $query1 = "INSERT INTO quant (quant_id, quantity) VALUES (null, '{$quant[$i]}')";
                                            $result1 = mysqli_query($conn, $query1);
                                            if (!$result1) {
                                                die("Database query failed: " . mysqli_error($conn));
                                            }
                                        }

                                        $queryq = "SELECT * FROM quant ORDER BY quant_id DESC LIMIT 3";
                                        $result5 = mysqli_query($conn, $queryq);
                                        $last_three_rows = array();
                                        while ($row = mysqli_fetch_array($result5, MYSQLI_ASSOC)) {
                                            $last_three_rows[] = $row;
                                        }
                                        $last_three_rows_rev = array_reverse($last_three_rows);

                                        if (!$result5) {
                                            die("Database query5 failed: " . mysqli_error($conn));
                                        }

                                        $i = 0;
                                        foreach ($item as $key => $ele) {
                                            $query2 = "SELECT * FROM items WHERE item_name = '$ele'";
                                            $result2 = mysqli_query($conn, $query2);

                                            if (!$result2) {
                                                die("Database query failed: " . mysqli_error($conn));
                                            }

                                            $row = mysqli_fetch_assoc($result2);
                                            $row2 = $last_three_rows_rev[$i];
                                            $query4 = "INSERT INTO invoice (id, item_id, quant_id, gov, dist, zip, city) VALUES(null, '$row[item_id]','$row2[quant_id]','$gov','$dist','$zip','$city')";
                                            $result4 = mysqli_query($conn, $query4);
                                            $i++;
                                            if (!$result4) {
                                                die("Database query failed: " . mysqli_error($conn));
                                            }
                                        }

                                        $total = 0;
                                        echo "<ul>";
                                        foreach ($item as $key => $ele) {
                                            $query = "SELECT * FROM items WHERE item_name = '$ele'";
                                            $result = mysqli_query($conn, $query);
                                            if (!$result) {
                                                die("Database query failed: " . mysqli_error($conn));
                                            }
                                            $row = mysqli_fetch_assoc($result);


                                            $total += ($row["item_price"] * $quant[$key]);

                                            echo "<li>" . htmlspecialchars($ele) . " - Price: $" . htmlspecialchars($row['item_price']) . "<br> - Quantity: " . htmlspecialchars($quant[$key]) . "</li>";
                                        }
                                        echo "</ul>";

                                        echo "<h3>Total Price: $" . $total . "</h3>";
                                    } else {
                                        echo "Some form fields are empty.";
                                    }

                                    ?>





                                </span>

                                <small class="bill-date" id="total-label">Price includes all taxes</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 col-sm-12 p-0 box">
                    <div class="card rounded-0 border-0 card2" id="paypage">
                        <div class="form-card">
                            <form action="ordersuccessfull.php" action="send_email.php">
                                <label class="pay">Name on Card</label><br>
                                <input type="text" name="cc" required>
                                <div class="row">
                                    <div class="col-8 col-md-6">
                                        <label class="pay">Card Number</label><br>
                                        <input type="text" name="cardno" id="cr_no" placeholder="0000-0000-0000-0000" minlength="19" maxlength="19" required>
                                    </div>
                                    <div class="col-4 col-md-6">
                                        <label class="pay">CVV</label><br>
                                        <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="pay">Expiration Date</label><br>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="exp" id="exp" placeholder="MM/YY" minlength="5" maxlength="5" required>
                                    </div>
                                </div><br>
                                <div class="row" style="padding-top: 20px; padding-bottom:5px">
                                    <class="col-md-6">

                                        <input name="send" type="submit" value="MAKE A PAYMENT" class=" btn btn-primary">

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <footer id=" footer" class="overflow-hidden padding-xlarge pb-0">
        <div class="container">
            <div class="row">
                <div class="footer-top-area pb-5">
                    <div class="row d-flex flex-wrap justify-content-between">
                        <div class="col-lg-3 col-sm-6 pb-3" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1000" data-aos-once="true">
                            <div class="footer-menu">
                                <img src="images/main-logo.png" alt="logo" class="mb-2">
                                <p>Empowering The Planet for a Better Future, One Ray at a Time.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 pb-3" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1600" data-aos-once="true">
                            <div class="footer-menu">
                                <h4 class="widget-title pb-2">Social info</h4>
                                <p>Follow us on our social platforms to get the latest updates</p>
                                <div class="social-links">
                                    <ul class="d-flex list-unstyled">
                                        <li>
                                            <a href="#">
                                                <svg class="facebook">
                                                    <use xlink:href="#facebook">
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg class="instagram">
                                                    <use xlink:href="#instagram">
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg class="twitter">
                                                    <use xlink:href="#twitter">
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg class="linkedin">
                                                    <use xlink:href="#linkedin">
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg class="youtube">
                                                    <use xlink:href="#youtube">
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </footer>
    <div id="footer-bottom">
        <div class="container">
            <div class="row d-flex flex-wrap justify-content-between">
                <div class="col-12">
                    <div class="copyright">
                        <p>© Copyright 2024 SOLAR TECH</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </script>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/script.js"></script>


    </script>

</body>

</html>