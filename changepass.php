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

<body style="background-color:black;color:antiquewhite">
    <?php session_start();
    include("C:\wamp64\www\Khane ki khoj/connection.php");

    ?>
    <div class="tm-top-header">
        <div class="container">
            <div class="row">
                <div class="tm-top-header-inner">


                    <h1 class="tm-site-name tm-handwriting-font">Khane ki khoj</h1>



                    <nav class="tm-nav">
                        <ul>


                            <li><a href="Home.php" class="">Home</a></li>

                            <li><a href="profile.php" class="active">View profile</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="out.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("connection.php");
    $user = $_SESSION['username'];

    $sql = "select * from login where username='$user'";

    $r = $conn->query($sql);
    $row = $r->fetch_assoc();
    $pass = $row['password'];
    $name = $row['name'];
    $sql2 = "select * from rating where user='$user'";
    $result = $conn->query($sql2);
    $row1 = $result->fetch_assoc();
    $rating_no = mysqli_num_rows($result);


    ?>
    <center>
        <div>
            <label style="margin-left: 20px;">Username:
                <input type="text" disabled value="<?php echo $user ?>">

            </label><br><br>

            <label style="margin-left: 40px;"> Name:
                <input type="text" disabled value="<?php echo $name ?>">
            </label><br><br>
            <center> <label>
                    <form action="passchanged.php" method="POST">
                        <label>
                            Enter new password: <br><input style="color: black;" type="password" name="newpass" required>
                        </label>
                        <label for="" style="color: black;"><input type="submit" name="pass" value="Change Password"></label>
                    </form>
            </center>
            </label>
            <label>No. of ratings given:
                <?php echo $rating_no; ?>
            </label><br><br>

            <?php
            if ($rating_no == 10) {


                echo "Congratulations you have succesfully given 10 Ratings<br>";
                echo "you have won a 20% discount coupon<br>";
                echo "Coupon Code:xeaf4d<br>";
            } else {
                echo 10 - $rating_no . " Ratings Remaining to claim reward";
            }
            ?>
        </div>
    </center>




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
<script>

</script>

</html>