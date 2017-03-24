<?php
	session_start();
	$db = mysqli_connect("localhost", "root", "okay", "authentication");
?>

<!DOCTYPE html>
<html>
<head> 
	<title> Events </title>
	<link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>
<div class = "header"> 
	<h1> Events At UCF </h1>
</div>

<h1><center>Home</center></h1>
<!--<div> <h4>Welcome <?php echo $_SESSION['username']; ?> </h4> </div>-->

<center><script type="text/javascript" src="http://output66.rssinclude.com/output?type=js&amp;id=1130242&amp;hash=beea90a2ebc62465bc851d28df75942c"></script></center>

</body>
</html>
