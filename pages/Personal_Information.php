<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 2/2/2018
 * Time: 11:43 AM
 */

session_start();
//error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"
          href="http://jbose.greenriverdev.com/IT328/Bose_Jarod_Dating/styles/styles.css?<?php echo time(); ?>">
    <link rel="stylesheet"
          href="http://jbose.greenriverdev.com/IT328/Bose_Jarod_Dating/styles/css/bootstrap.min.css">
    <title>Personal_Information</title>
</head>
<body>
<nav class="nav-pills navbar-inverse navbar-toggleable-sm" style="background-color: lightgray;">
    <h3>My Dating Website</h3>
    <div class="container">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="home.html">Home</a>
            <a class="nav-item nav-link active" href="Personal_Information.php">Personal Info</a>
            <a class="nav-item nav-link" href="Profile.php">Profile</a>
            <a class="nav-item nav-link" href="Interest.php">Interest</a>
        </div>
    </div>
</nav>
<div class="container">
    <figure id="border">
        <figcaption>
            <h1 class="ml-5"><br><strong>Personal Information</strong></h1>
            <form>
                <fieldset form="form-group">
                    <div class="col-lg-6">
                        <p id="InputTitle">First Name</p>
                        <input class="form-control ml-5" type="text" name="firstName" placeholder="First Name">
                    </div>
                    <div id="box">
                        <p>
                            <strong>Note:</strong> All information entered is protected by our
                            <a href="#">privacy policy</a>. Profile information can only be viewed
                            by others with your permission
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p id="InputTitle3">Last Name</p>
                        <input class="form-control ml-5" type="text" name="lastName" placeholder="Last Name">
                    </div>
                    <div class="col-lg-6">
                        <p id="InputTitle2">Age</p>
                        <input class="form-control ml-5" type="text" name="age" placeholder="Age">
                    </div>
                    <div class="col-lg-6">
                        <p id="InputTitle2">Gender</p>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Male
                        <input class="ml-2" type="radio" name="male">
                        &nbsp Female <input type="radio" name="female">
                    </div>
                    <div class="col-lg-6">
                        <p id="InputTitle2">Phone Number</p>
                        <input class="form-control ml-5" type="text" name="phoneNumber" placeholder="Phone Number">
                    </div>
                    <div id="adjustButton">
                        <button class="btn btn-primary ml-5">Back</button>
                        <button class="btn btn-primary" id="nextPage">Next</button>
                    </div>
                </fieldset>
            </form>
        </figcaption>
    </figure>
</div>
<script src="js/jquery.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
