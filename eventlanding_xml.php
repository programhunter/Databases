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
        <h1>Matching Events</h1>
        <ul class="list-group">
            <li class="list-group-item"><span>List Group Item 1</span></li>
            <li class="list-group-item"><span>List Group Item 2</span></li>
            <li class="list-group-item"><span>List Group Item 3</span></li>
        </ul>
    </div>

	<!-- EDITING BEGINS 
	<center><script type="text/javascript" src="http://output66.rssinclude.com/output?type=js&amp;id=1130242&amp;hash=beea90a2ebc62465bc851d28df75942c"></script></center>
	-->

	<?php
	
	$xml = simplexml_load_file("events-feed.xml") or die("Error: cannot create object");
	
	foreach($xml->children() as $event) {
		
		echo $event->id . "<br>";
		echo $event->title . "<br>";
		echo $event->start_date . "<br>";
		echo $event->end_date . "<br>";
		echo $event->location . "<br>";
		echo $event->location_website . "<br>";
		echo $event->description . "<br>";
		echo $event->contact_person . "<br>";
		echo $event->contact_email . "<br>";
		echo $event->contact_phone . "<br>";
		echo $event->category . "<br>";
		echo "<br>";

		}
	
		/* INSERT INTO DB 

		$id = $event->id; 
		$name = $event->title;
		$s_d = $event->start_date;
		$e_d = $event->end_date;
		$location = $event->location;
		$l_w = $event->location_website;
		$descr = $event->description;
		$c_p = $event->contact_person;
		$c_e = $event->contact_email;
		$c_ph = $event->contact_phone;
		$cat = $event->category;

		$query .= "INSERT INTO event (id, name, start_date, end_date, location, 
					 location_website, description, contact_person, contact_email,
					 contact_phone, category) 
					 VALUES ('$id', '$name', '$s_d', '$e_d', '$location', '$l_w',
					 '$descr', '$c_p', '$c_e', '$c_ph', '$cat')";

			*/

		/* TRYING TO INSERT INTO DB
		if($count==1){
			$query = "INSERT INTO event (id, name, start_date, end_date, location, 
					 location_website, description, contact_person, contact_email,
					 contact_phone, category) 
					 VALUES ('$event->id', '$event->name', '$event->start_date', 
					 '$event->end_date', '$event->location', '$event->location_website',
					 '$event->description', '$event->contact_person', 
					 '$event->contact_email', '$event->contact_phone', 
					 '$event->category');";	
			$count = $count + 1;
		}
		else{
			$query .= "INSERT INTO event (id, name, start_date, end_date, location, 
					 location_website, description, contact_person, contact_email,
					 contact_phone, category) 
					 VALUES ('$event->id', '$event->name', '$event->start_date', 
					 '$event->end_date', '$event->location', '$event->location_website',
					 '$event->description', '$event->contact_person', 
					 '$event->contact_email', '$event->contact_phone', 
					 '$event->category')";
		}

		if(mysqli_multi_query($con, $query) === TRUE){
			$result = 'New record created successfully';
		}
		else{
			$result = 'error inserting';
		}

		echo($result);
		
		}
				 
		
		*/
	
	

?>

	<!-- end -->
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
