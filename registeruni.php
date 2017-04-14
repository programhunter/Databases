<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollegeEventWebsite</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color:rgb(255, 207, 7);">


<?php
    require('db.php');
?>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">College Events</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="ucfhome.php" style="background-image:url(&quot;none&quot;);background-color:transparent;color:rgb(51, 51, 51);background-repeat:repeat;">Home </a></li>
                    <li role="presentation"><a href="rsos.php">RSOs </a></li>
                    <li role="presentation"><a href="eventsearch.php">Events </a></li>
                    <li role="presentation"><a href="logout.php">Logout </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="register-photo" style="background-color:rgb(255, 207, 7);">
        <div class="form-container">
            <form method="post" style="background-color:rgb(255, 207, 7);">
                <h2 class="text-center" style="color:rgb(0,0,0);">University Registration</h2>
                <div class="form-group">
                    <label class="control-label">University Name</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label class="control-label">Location </label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label class="control-label">Description </label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label class="control-label">Number Of Students</label>
                    <input class="form-control" type="number">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Apply </button>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>