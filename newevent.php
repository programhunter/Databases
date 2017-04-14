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
    require('auth.php');
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
    <div class="container">
        <h1>Create a new event</h1>
        <form>
            <div class="form-group">
                <label class="control-label" style="padding-top:10px;">RSO ID</label>
                <input class="form-control" type="number">
            </div>
            <div class="form-group">
                <label class="control-label">Event Name</label>
                <input class="form-control" type="text">
            </div>
            <div class="form-group">
                <label class="control-label" style="padding-top:10px;">Event Type</label>
                <select class="form-control">
                    <optgroup label="This is a group">
                        <option value="12" selected="">Select</option>
                        <option value="13">Food</option>
                        <option value="14">Fraternity</option>
                        <option value="15">Sorority</option>
                        <option value="16">Charity</option>
                        <option value="17">Sport</option>
                    </optgroup>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" style="padding-top:10px;">Email </label>
                <input class="form-control" type="email">
            </div>
            <div class="form-group">
                <label class="control-label" style="padding-top:10px;">Contact Phone Number</label>
                <input class="form-control" type="tel">
            </div>
            <div class="form-group">
                <label class="control-label" style="padding-top:10px;">Event Location</label>
                <select class="form-control">
                    <optgroup label="This is a group">
                        <option value="12" selected="">Select</option>
                        <option value="13">UCF Arena</option>
                        <option value="14">Student Union</option>
                    </optgroup>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" style="padding-top:10px;">Room Number</label>
                <input class="form-control" type="number">
            </div>
            <div class="form-group">
                <label class="control-label" style="padding-top:10px;">Start Time </label>
                <input class="form-control" type="time">
                <label class="control-label" style="padding-top:10px;">End Time </label>
                <input class="form-control" type="time">
                <label class="control-label" style="padding-top:10px;">Event Description</label>
                <input class="form-control" type="text">
                <label class="control-label" style="padding-top:10px;">Event Privacy</label>
                <select class="form-control">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select>
                <button class="btn btn-default" type="button">Submit </button>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>