<?php

	// This php script adds a student to a class given a email and a 
	// course id
	
	// Check if the email and cid have been set
	if (isset($_POST['email']) && isset($_POST['cid'])) {
		
		// Connect to the database
		$username = "schwer";
		$password = "Egh8vF5d";
		$db_name = "schwer_Incognito";

		$db_conn = mysql_connect("cubist.cs.washington.edu", $username, $password);
		if (!$db_conn) {
			die("Could not connect");
		}

		mysql_select_db($db_name, $db_conn);
		
		// First get the uid for the student based off of the email
		$email = $_POST['email'];
		$cid = $_POST['cid'];
		$query = sprintf("SELECT uid FROM User WHERE email = '%s';", $email);
		$results = mysql_query($query, $db_conn);
		
		// Check for errors
		if (!$results) {
			die("Error: " + mysql_error());
		}
		
		$row = mysql_fetch_row($results);

		// Now insert the student, session pair in the attends table
		$uid = $_POST['uid'];
		$sid = $row[0];
		$query = sprintf("INSERT INTO Attends VALUES (%d, %d);", $uid, $sid);
		$results = mysql_query($query, $db_conn);

		// Do some error checking
		if (!$results) {
			die("Error: " + mysql_error($db_conn));
		}
	}

?>