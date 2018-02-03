<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 2/2/2018
 * Time: 11:44 AM
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
    <title>Interest</title>
</head>
<body>
<nav class="nav-pills navbar-inverse navbar-toggleable-sm" style="background-color: lightgray;">
    <h3>My Dating Website</h3>
    <div class="container">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="home.html">Home</a>
            <a class="nav-item nav-link" href="Personal_Information.php">Personal Info</a>
            <a class="nav-item nav-link" href="Profile.php">Profile</a>
            <a class="nav-item nav-link active" href="Interest.php">Interest</a>
        </div>
    </div>
</nav>
<div class="container">
    <figure id="border">
        <figcaption>
            <h1 class="ml-5"><br><strong>Interest</strong></h1>
            <form action="" method="post">
                <fieldset form="form-group">
                    <div class="form-group ml-lg-2">
                        <label class="d-block" id="InputTitle2">Indoor Activities</label>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]" value="TV"> TV
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]" value="Movies"> Movies
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]" value="Cooking"> Cooking
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]" value="Board_Games">
                                Board Games
                            </label>
                        </div>
                         <br>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]" value="Puzzles"> Puzzles
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]" value="Reading"> Reading
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]" value="Playing_Cards">
                                Playing Cards
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]" value="Video_Games">
                                Video Games
                            </label>
                        </div>
                    </div>
                    <div class="form-group ml-lg-2">
                        <label class="d-block" id="InputTitle2">Outdoor Activities</label>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]" value="Hiking"> Hiking
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]" value="Biking"> Biking
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]" value="Swimming">
                                Swimming
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]" value="Collecting">
                                Collecting
                            </label>
                        </div>
                        <br>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]" value="Walking">
                                Walking
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]" value="Climbing">
                                Climbing
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]" value="Winter_Sports">
                                Snowboarding/Skiing
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]" value="Gardening">
                                Gardening
                            </label>
                        </div>
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
