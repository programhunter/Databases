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
        <div class="jumbotron">
            <h1>Search for Events </h1>
            <p>Use bar below to search for different event around campus</p>
            <p style="font-size:15px;">You can search by event name in the search box or leave it blank to just use the dropdown input</p>
            <form>
                <div class="form-group"></div>
            </form>
            <div>
                <input type="search">
                <select style="margin:10px;">
                    <optgroup label="This is a group">
                        <option value="12" selected="">University</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select>
                <select style="margin:10px;">
                    <optgroup label="This is a group">
                        <option value="12" selected="">Organization</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select>
                <select>
                    <optgroup label="This is a group">
                        <option value="12" selected="">Privacy</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select>
                <button class="btn btn-default" type="button" style="margin:10px;"><a href="eventlanding.php">Search</a> </button>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="button" style="margin:20px;"><a href="newevent.php">Create New Event</a></button>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>