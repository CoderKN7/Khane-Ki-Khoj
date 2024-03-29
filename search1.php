<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Khane ki khoj - home</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style1.css" rel="stylesheet">

    <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        th {
            border: 1px solid darkcyan;
            padding: 10px;
            font-size: 20px;
        }

        td {
            padding: 10px;
            color: blanchedalmond;
            background-color: darkcyan;
            font-size: 18px;
        }
    </style>
</head>

<body style="background-color:chartreuse">
    <?php include("connection.php"); ?>
    <div class="tm-top-header">
        <div class="container">
            <div class="row">
                <div class="tm-top-header-inner">


                    <h1 style="margin-left: -20px;" class="tm-site-name tm-handwriting-font">Khane ki khoj</h1>

                    <form method="$_GET" action="search.php">
                        <input type="text" name="txt" placeholder="Name of hotel,city,locality" class="search" style=" border-radius: 25px; background:white;color:darkred; height:30px;margin-top:7px;width:250px">
                        <input type="submit" name="searchsubmit" value="Search" style="font-size:12px;background-color:#c79c60;margin-top:7px">
                    </form>
                    <nav class="tm-nav">
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="profile.php">View profile</a></li>
                            <li><a href="contact.html">Contact </a></li>
                            <li><a href="out.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>



    <form action="search1.php" method="POST">

        <label style="margin-left: 900px;" for="">Apply filter : </label>

        <select name="sortlist" id="">
            <option value="1">A-Z</option>
            <option value="2">Z-A</option>
            <option value="3">Rating(asen)</option>
            <option value="4">Rating(desc)</option>
        </select>
        <input type="submit" value="Apply" name="sort">
    </form>

    <?php
include("connection.php");
   
    session_start();

$name = $_SESSION['key'];
    $key = "%" . $name . "%";

if (isset($_POST['sort'])) {

    if ($_POST['sortlist'] == 1) {
            $sql = ' SELECT * FROM hotel WHERE h_name LIKE \'' . $key . '\' order by h_name asc';
            $sql1 = 'SELECT * FROM hotel WHERE h_city LIKE \'' . $key . '\' order by h_name asc';
            $result1 = $conn->query($sql1);
            $result = $conn->query($sql);
       
            if ($result->num_rows > 0) {
                echo "<center><h2>Results by name :</h2></center><br>";
                echo "<table style='width:100%'>";
                echo "<tr>" .
                    "<th>Hotel Name</th>" .
                    "<th>Speciality</th>" .
                    "<th>Address</th>" .
                    "<th>City</th>" .
                    "<th>Rating</th>" .
                    "<th>Visit</th>" .
                    "</tr>";

                while ($row = $result->fetch_assoc()) {

                    echo '<tr>';

                    echo '<td>';
                    echo $row['h_name'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_speciality'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_address'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_city'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['rating'] . " Star<br>";
                    echo '</td>';


                    echo '<td>';
                    echo   "<a style='color:white' href='" . $row["h_id"] . ".php'>View</a><br>";

                    echo '</td>';


                    echo '</tr>';
                }
                echo "</table>";
            } else {
                echo " <center><h3>not found by name</center>";
            }
            if ($result1->num_rows > 0) {
                echo "<center><h2>Results by City :</h2></center><br>";
                echo "<table style='width:100%' >";
                echo "<tr>" .
                    "<th>Hotel Name</th>" .
                    "<th>Speciality</th>" .
                    "<th>Address</th>" .
                    "<th>City</th>" .
                    "<th>Rating</th>" .
                    "<th>Visit</th>" .
                    "</tr>";

                while ($row = $result1->fetch_assoc()) {

                    echo '<tr>';

                    echo '<td>';
                    echo $row['h_name'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_speciality'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_address'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_city'] . "<br>";

                    echo '</td>';

                    echo '<td>';
                    echo $row['rating'] . " Star<br>";
                    echo '</td>';

                    echo '<td>';
                    echo   "<a style='color:white' href='" . $row["h_id"] . ".php'>View</a><br>";

                    echo '</td>';

                    echo '</tr>';
                }
                echo "</table>";
            } else {
                echo " <center><h2>not found by City</center>";
            }

    }
    if ($_POST['sortlist'] == 2) {
            $sql = ' SELECT * FROM hotel WHERE h_name LIKE \'' . $key . '\' order by h_name desc';
            $sql1 = 'SELECT * FROM hotel WHERE h_city LIKE \'' . $key . '\' order by h_name desc';
            $result1 = $conn->query($sql1);
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<center><h2>Results by name :</h2></center><br>";
                echo "<table style='width:100%'>";
                echo "<tr>" .
                    "<th>Hotel Name</th>" .
                    "<th>Speciality</th>" .
                    "<th>Address</th>" .
                    "<th>City</th>" .
                    "<th>Rating</th>" .
                    "<th>Visit</th>" .
                    "</tr>";

                while ($row = $result->fetch_assoc()) {

                    echo '<tr>';

                    echo '<td>';
                    echo $row['h_name'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_speciality'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_address'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_city'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['rating'] . " Star<br>";
                    echo '</td>';


                    echo '<td>';
                    echo   "<a style='color:white' href='" . $row["h_id"] . ".php'>View</a><br>";

                    echo '</td>';


                    echo '</tr>';
                }
                echo "</table>";
            } else {
                echo " <center><h3>not found by name</center>";
            }
            if ($result1->num_rows > 0) {
                echo "<center><h2>Results by City :</h2></center><br>";
                echo "<table style='width:100%' >";
                echo "<tr>" .
                    "<th>Hotel Name</th>" .
                    "<th>Speciality</th>" .
                    "<th>Address</th>" .
                    "<th>City</th>" .
                    "<th>Rating</th>" .
                    "<th>Visit</th>" .
                    "</tr>";

                while ($row = $result1->fetch_assoc()) {

                    echo '<tr>';

                    echo '<td>';
                    echo $row['h_name'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_speciality'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_address'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_city'] . "<br>";

                    echo '</td>';

                    echo '<td>';
                    echo $row['rating'] . " Star<br>";
                    echo '</td>';

                    echo '<td>';
                    echo   "<a style='color:white' href='" . $row["h_id"] . ".php'>View</a><br>";

                    echo '</td>';

                    echo '</tr>';
                }
                echo "</table>";
            } else {
                echo " <center><h2>not found by City</center>";
            }

    }
    if ($_POST['sortlist'] == 3) {
            $sql = ' SELECT * FROM hotel WHERE h_name LIKE \'' . $key . '\' order by rating asc';
            $sql1 = 'SELECT * FROM hotel WHERE h_city LIKE \'' . $key . '\' order by rating asc';
            $result1 = $conn->query($sql1);
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<center><h2>Results by name :</h2></center><br>";
                echo "<table style='width:100%'>";
                echo "<tr>" .
                    "<th>Hotel Name</th>" .
                    "<th>Speciality</th>" .
                    "<th>Address</th>" .
                    "<th>City</th>" .
                    "<th>Rating</th>" .
                    "<th>Visit</th>" .
                    "</tr>";

                while ($row = $result->fetch_assoc()) {

                    echo '<tr>';

                    echo '<td>';
                    echo $row['h_name'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_speciality'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_address'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_city'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['rating'] . " Star<br>";
                    echo '</td>';


                    echo '<td>';
                    echo   "<a style='color:white' href='" . $row["h_id"] . ".php'>View</a><br>";

                    echo '</td>';


                    echo '</tr>';
                }
                echo "</table>";
            } else {
                echo " <center><h3>not found by name</center>";
            }
            if ($result1->num_rows > 0) {
                echo "<center><h2>Results by City :</h2></center><br>";
                echo "<table style='width:100%' >";
                echo "<tr>" .
                    "<th>Hotel Name</th>" .
                    "<th>Speciality</th>" .
                    "<th>Address</th>" .
                    "<th>City</th>" .
                    "<th>Rating</th>" .
                    "<th>Visit</th>" .
                    "</tr>";

                while ($row = $result1->fetch_assoc()) {

                    echo '<tr>';

                    echo '<td>';
                    echo $row['h_name'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_speciality'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_address'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_city'] . "<br>";

                    echo '</td>';

                    echo '<td>';
                    echo $row['rating'] . " Star<br>";
                    echo '</td>';

                    echo '<td>';
                    echo   "<a style='color:white' href='" . $row["h_id"] . ".php'>View</a><br>";

                    echo '</td>';

                    echo '</tr>';
                }
                echo "</table>";
            } else {
                echo " <center><h2>not found by City</center>";
            }

    }
    if ($_POST['sortlist'] == 4) {
            $sql = ' SELECT * FROM hotel WHERE h_name LIKE \'' . $key . '\' order by rating desc';
            $sql1 = 'SELECT * FROM hotel WHERE h_city LIKE \'' . $key . '\' order by rating desc';
            $result1 = $conn->query($sql1);
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<center><h2>Results by name :</h2></center><br>";
                echo "<table style='width:100%'>";
                echo "<tr>" .
                    "<th>Hotel Name</th>" .
                    "<th>Speciality</th>" .
                    "<th>Address</th>" .
                    "<th>City</th>" .
                    "<th>Rating</th>" .
                    "<th>Visit</th>" .
                    "</tr>";

                while ($row = $result->fetch_assoc()) {

                    echo '<tr>';

                    echo '<td>';
                    echo $row['h_name'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_speciality'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_address'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_city'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['rating'] . " Star<br>";
                    echo '</td>';


                    echo '<td>';
                    echo   "<a style='color:white' href='" . $row["h_id"] . ".php'>View</a><br>";

                    echo '</td>';


                    echo '</tr>';
                }
                echo "</table>";
            } else {
                echo " <center><h3>not found by name</center>";
            }
            if ($result1->num_rows > 0) {
                echo "<center><h2>Results by City :</h2></center><br>";
                echo "<table style='width:100%' >";
                echo "<tr>" .
                    "<th>Hotel Name</th>" .
                    "<th>Speciality</th>" .
                    "<th>Address</th>" .
                    "<th>City</th>" .
                    "<th>Rating</th>" .
                    "<th>Visit</th>" .
                    "</tr>";

                while ($row = $result1->fetch_assoc()) {

                    echo '<tr>';

                    echo '<td>';
                    echo $row['h_name'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_speciality'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_address'] . "<br>";
                    echo '</td>';

                    echo '<td>';
                    echo $row['h_city'] . "<br>";

                    echo '</td>';

                    echo '<td>';
                    echo $row['rating'] . " Star<br>";
                    echo '</td>';

                    echo '<td>';
                    echo   "<a style='color:white' href='" . $row["h_id"] . ".php'>View</a><br>";

                    echo '</td>';

                    echo '</tr>';
                }
                echo "</table>";
            } else {
                echo " <center><h2>not found by City</center>";
            }
    }
}

   

    ?>
    <footer>
        <div class="foot" style="background-color:black;position: absolute;bottom:auto ;left: 0px; height:100%;width: 100%;">
            <div class="tm-black-bg" style="background-color: black;">
                <div class="container">
                    <div class="row margin-bottom-60">
                        <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
                            <h3 class="tm-footer-div-title">Main Menu</h3>
                            <ul>
                                <li><a href="home.php">Home</a></li>
                                <li><a href="profile.php">View profile</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="out.php">Logout</a></li>
                            </ul>
                        </nav>
                        <div class="col-lg-5 col-md-5 tm-footer-div">
                            <h3 class="tm-footer-div-title">About Us</h3>
                            <p class="margin-top-15" style="color:aqua">An oraganization to provide you best restraunts </p>
                            <p class=" margin-top-15"></p>
                            <p class="col-lg-12 small copyright-text text-center">Copyrights @khane ki khoj</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </footer>


</body>

</html>
<?php
session_start();



?>