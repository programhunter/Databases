<?php

require('db.php');

include("auth.php");

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title>Create an RSO</title>

<link rel="stylesheet" href="style.css" />

</head>

<div id="page">


		<center><p class="body">
			
			<form>
				<h3> Create a new Registered Student Organization</h3>

				<h5> To propose a new student organization, enter the PIDs of at least 5 students. </h5>
				
				<table>
					<tr><td> RSO Name: </td>
					<td> <input type="text" name="" value=""> </td></tr>

					<tr><td> RSO Description (optional): </td>
					<td> <input type="text" name="" value=""> </td></tr>

					<tr><td> Member 1: </td>
					<td> <input type="text" name="" value=""> </td></tr>
					
					<tr><td> Member 2: </td>
					<td> <input type="text" name="" value=""> </td></tr>

					<tr><td> Member 3: </td>
					<td> <input type="text" name="" value=""> </td></tr>
					
					<tr><td> Member 4: </td>
					<td> <input type="text" name="" value=""> </td></tr>
					
					<tr><td> Member 5: </td>
					<td> <input type="text" name="" value=""> </td></tr>
			</form>	
					<form method="get" action="request_submitted.php">		
					<tr><td><input type="submit" value="Submit">  </td></tr>
					</form>
				</table>
			
		</p>
	</div>
</body>
