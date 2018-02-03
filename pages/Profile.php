<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 2/2/2018
 * Time: 11:43 AM
 */

//error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//session start
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
    <title>Profile</title>
</head>
<body>
<nav class="nav-pills navbar-inverse navbar-toggleable-sm" style="background-color: lightgray;">
    <h3>My Dating Website</h3>
    <div class="container">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="home.html">Home</a>
            <a class="nav-item nav-link" href="Personal_Information.php">Personal Info</a>
            <a class="nav-item nav-link active" href="Profile.php">Profile</a>
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
                    <div class="col-lg-6" id="InputTitle5">
                        <p id="InputTitle4">Email</p>
                        <input class="form-control ml-5" type="text" name="email" placeholder="Email">
                    </div>
                    <div class="col-lg-5" id="biography">
                        <p id="InputTitle4">Biography</p>
                        <textarea class="form-control ml-5" rows="6" name="biography"></textarea>
                    </div>
                    <div class="col-lg-6">
                        <p id="InputTitle3">State</p>
                        <input class="form-control ml-5" type="text" name="state" placeholder="Washington">
                    </div>
                    <div class="col-lg-6">
                        <p id="InputTitle2">Seeking</p>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Male
                        <input class="ml-2" type="radio" name="seekGender" value="male">
                        &nbsp Female <input type="radio" name="seekGender" value="female">
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

<pre>
    <?php
    if(!empty($_POST)) {

        include('http://jbose.greenriverdev.com/IT328/Bose_Jarod_Dating/model/DataValidation.php');

        $isValid = true;


        if (!empty($_POST["email"])) {
            $_SESSION["email"] = $_POST["email"];
            if (!filter_var($_SESSION["email"], FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format";
                $isValid = false;
            }}
            else {
                echo "<p>Please input your email in the correct format</p>";
                $isValid = false;
            }

        if(!empty($_POST["state"])){
            $_SESSION["state"] = $_POST["state"];
        }
        else{
            echo "<p>Please enter the US state you are currently in</p>";
            $isValid = false;
        }

        if(!empty($_POST["biography"])){
            $_SESSION["biography"] = $_POST["biography"];
        }
        else{
            echo "<p>Please enter a Biography of you</p>";
            $isValid = false;
        }

        if(isset($_POST["seekGender"])){
            $_SESSION["seekGender"] = $_POST["seekGender"];
        }
        else{
            echo "<p>Please enter the gender you are matching for</p>";
            $isValid = false;
        }
    }
    ?>
</pre>
<script src="js/jquery.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
