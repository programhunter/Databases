<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    error_reporting(E_ERROR);

    if (isset($_REQUEST['username']))
    {     
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username); 

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);

    $trn_date = date("Y-m-d H:i:s");

        $query = "INSERT into `users` (username, password, email, trn_date)
            VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";

        $result = mysqli_query($con,$query);

        if($result)
        {
            header('Location: index.php');
        }

        else
        {

        }
    }

    ?>

    <div class="login-clean" style="background-color:rgb(255, 207, 7);">
        <form method="post" style="background-color:rgb(255, 207, 7);">


            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>

            <div class="form-group">
                <input class="form-control" type="username" name="username" placeholder="Username">
            </div>


            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block" 
                type="submit">Register</button>
            </div>



            <a href="loginadmin.php" class="forgot">Admin Login here</a>

            <a href="index.php" class="forgot">Already registered? Login!
            </a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>