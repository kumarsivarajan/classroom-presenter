<?php

	// This php script, given a course id, will create a new session for
	// that course
	
	if (isset($_POST['cid'])) {
		
		// Connect to the database
		$username = "schwer";
		$password = "Egh8vF5d";
		$db_name = "schwer_Incognito";

		$db_conn = mysql_connect("cubist.cs.washington.edu", $username, $password);
		if (!$db_conn) {
			die("Could not connect");
		}

		mysql_select_db($db_name, $db_conn);
		
		// Now insert a new session into the Session table
		$cid = $_POST['cid'];
		$query = sprintf("INSERT INTO Session (cid, open) VALUES (%d, 1);", $cid);
		$results = mysql_query($query, $db_conn);
		
		// Error Check
		if (!$results) {
			die("Error: " + mysql_error($db_conn));
		}
	}

?>