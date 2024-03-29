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

</head>

<body style="background-color:black;color:bisque">
    <?php include("connection.php"); ?>
    <div class="tm-top-header">
        <div class="container">
            <div class="row">
                <div class="tm-top-header-inner">


                    <h1 class="tm-site-name tm-handwriting-font">Khane ki khoj</h1>

                    <form method="$_GET" action="search.php">
                        <input type="text" name="txt" placeholder="Name of hotel,city,locality" class="search" style=" border-radius: 25px; background:white;color:darkred; height:30px;margin-top:7px;width:250px">
                        <input type="submit" name="searchsubmit" value="Search" style="font-size:12px;background-color:#c79c60;margin-top:7px">
                    </form>
                    <nav class="tm-nav">
                        <ul>


                            <li><a href="home.php" class="active">Home</a></li>

                            <li><a href="profile.php">View Profile</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="out.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="head">

        <div>
            <?php


            $query1 = "select * from hotel where rating like '5' order by rand() limit 1";
            $res = $conn->query($query1);
            $row = $res->fetch_assoc();
            $rating = $row['rating'];
            $h_id = $row['h_id'];
            $hotelname = $row['h_name'];
            $speciality = $row['h_speciality'];
            ?>
        </div>

        <center>
            <h1 style=" margin-top: 5px;color:brown">Top Hotel</h1>

            <a href="<?php echo   $h_id . ".php" ?>" style="text-decoration:none;">
                <div style="color:black;width:50%;height:auto;background-color:darkgray;border-radius:20px;border-style: outset;">
                    <h2 style=""><?php echo $hotelname; ?></h2>
                    <p style="font-size: 30px; "> Speciality : <?php echo $speciality . "<br>Rating : " . $rating . " star";  ?></p>
                    <img style="height: 300px; border-radius:10px;" src="<?php echo "img/" . $h_id . ".jpg"; ?>"><br>
                </div>

            </a>
    </div>


    </center>
    </div>
    <div style="background-color: crimson;border-style: inset;
    border-radius: 100px;border-style: inset;
    border-radius: 100px;">
        <?php


        $query1 = "select * from hotel  order by rand() limit 1";
        $res = $conn->query($query1);
        $row = $res->fetch_assoc();
        $rating = $row['rating'];
        $h_id = $row['h_id'];
        $hotelname = $row['h_name'];
        $speciality = $row['h_speciality'];


        ?>

        <a href="<?php echo   $h_id . ".php" ?>" style="text-decoration: none;">
            <div style=" margin-top: 55px;
    position: absolute;
    left: 150px;
    height: auto;
    width: 250px;
    top: auto;
    background-color: springgreen;
    border-radius: 19px;">

                <center>
                    <p>

                        <h2 style="color:black; "><?php echo $hotelname; ?></h2>
                        <p style="font-size: 15px;color:black"> Speciality : <?php echo $speciality . "<br>Rating : " . $rating . " star";  ?></p>


                    </p>
                </center>
            </div>
        </a>
        <img style="height: 200px; border-radius:10px;margin-left:500px;margin-top:20px" src="<?php echo "img/" . $h_id . ".jpg"; ?>">
    </div>


    <div style="background-color: crimson;border-style: inset;
    border-radius: 100px;border-style: inset;
    border-radius: 100px;">
        <?php

        $query1 = "select * from hotel  order by rand() limit 1";
        $res = $conn->query($query1);
        $row = $res->fetch_assoc();
        $h_id1 = $row['h_id'];
        if ($h_id1 == $h_id) {

            $query1 = "select * from hotel  order by rand() limit 1";
            $res = $conn->query($query1);
            $row = $res->fetch_assoc();
            $h_id1 = $row['h_id'];
        }


        $rating = $row['rating'];

        $hotelname = $row['h_name'];
        $speciality = $row['h_speciality'];



        ?>

        <a href="<?php echo   $h_id1 . ".php" ?>" style="text-decoration: none;">
            <div style=" margin-top:55px;
    position: absolute;
    left: 150px;
    height: auto;
    width: 250px;
    top: auto;
    background-color: springgreen;
    border-radius: 19px;">

                <center>
                    <p>

                        <h2 style="color:black; "><?php echo $hotelname; ?></h2>
                        <p style="font-size: 15px;color:black"> Speciality : <?php echo $speciality . "<br>Rating : " . $rating . " star";  ?></p>


                    </p>
                </center>
            </div>
        </a>
        <img style="height: 200px; border-radius:10px;margin-left:500px;margin-top:20px" src="<?php echo "img/" . $h_id1 . ".jpg"; ?>">
    </div>


    <div style="background-color: crimson;border-style: inset;
    border-radius: 100px;border-style: inset;
    border-radius: 100px;">
        <?php
        $query1 = "select * from hotel  order by rand() limit 1";
        $res = $conn->query($query1);
        $row = $res->fetch_assoc();
        $h_id2 = $row['h_id'];
        if ($h_id2 == $h_id || $h_id2 == $h_id1) {
            $query1 = "select * from hotel  order by rand() limit 1";
            $res = $conn->query($query1);
            $row = $res->fetch_assoc();
            $h_id2 = $row['h_id'];
        }



        $rating = $row['rating'];

        $hotelname = $row['h_name'];
        $speciality = $row['h_speciality'];


        ?>

        <a href="<?php echo   $h_id2 . ".php" ?>" style="text-decoration: none;">
            <div style=" margin-top: 55px;
    position: absolute;
    left: 150px;
    height: auto;
    width: 250px;
    top: auto;
    background-color: springgreen;
    border-radius: 19px;">

                <center>
                    <p>

                        <h2 style="color:black; "><?php echo $hotelname; ?></h2>
                        <p style="font-size: 15px;color:black"> Speciality : <?php echo $speciality . "<br>Rating : " . $rating . " star";  ?></p>


                    </p>
                </center>
            </div>
        </a>
        <img style="height: 200px; border-radius:10px;margin-left:500px;margin-top:20px" src="<?php echo "img/" . $h_id2 . ".jpg"; ?>">
    </div>



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