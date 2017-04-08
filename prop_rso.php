<?php

	$name = $_REQUEST['name'];
	$mem1 = $_REQUEST['mem1'];
	$mem2 = $_REQUEST['mem2'];
	$mem3 = $_REQUEST['mem3'];
	$mem4 = $_REQUEST['mem4'];
	$mem5 = $_REQUEST['mem5'];

	echo($name . " has been created! These are the members");

	echo("<br/>Member 1: " . $mem1);
	echo("<br/>Member 2: " . $mem2);
	echo("<br/>Member 3: " . $mem3);
	echo("<br/>Member 4: " . $mem4);
	echo("<br/>Member 5: " . $mem5);

?>
