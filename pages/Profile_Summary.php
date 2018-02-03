<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 2/2/2018
 * Time: 11:52 AM
 */

//error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//start session
session_start();
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
    <title>Profile Sumary</title>
</head>
<body>
<nav class="nav-pills navbar-inverse navbar-toggleable-sm" style="background-color: lightgray;">
    <h3>My Dating Website</h3>
    <div class="container">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="home.html">Home</a>
            <a class="nav-item nav-link" href="Personal_Information.php">Personal Info</a>
            <a class="nav-item nav-link" href="Profile.php">Profile</a>
            <a class="nav-item nav-link" href="Interest.php">Interest</a>
        </div>
    </div>
</nav>
<div class="container">
    <figure id="border">
        <img id="profilePic" class="img-fluid rounded"
             src="http://jbose.greenriverdev.com/IT328/Bose_Jarod_Dating/images/profile_pic.jpg"
             alt="Profile Picture">
        <figcaption>
            <div>
                <table>
                    <tr><th>Name: </th></tr>
                    <tr><td>Gender: </td></tr>
                    <tr><td>Age: </td></tr>
                    <tr><td>Phone: </td></tr>
                    <tr><td>Email: </td></tr>
                    <tr><td>State: </td></tr>
                    <tr><td>Seeking: </td></tr>
                    <tr><td>Interest: </td></tr>
                </table>
            </div>
            <div id="adjustButton">
                <button class="btn btn-primary ml-5">Back</button>
                <button class="btn btn-primary" id="contact">Contact Me!</button>
            </div>
        </figcaption>
    </figure>
</div>
<script src="js/jquery.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
