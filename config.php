<?php
	// connecting to database
	$db = mysqli_connect("localhost", "root", "", "test");

	// setting the encoding for connecting to the database
	mysqli_set_charset($db, "utf8");

	// setting default timezone
	date_default_timezone_set("Europe/Moscow");
?>