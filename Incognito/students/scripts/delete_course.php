<?php
	include '../../db_credentials.php';
	// This php file will delete a course from a student's course list
	// given a uid for the student and a cid for the course
	
	// Check if we are given a uid and a cid
	if (isset($_POST['uid']) && isset($_POST['cid'])) {
		
		// Connect to the database
		//$username = "schwer";
		//$password = "Egh8vF5d";
		//$db_name = "schwer_Incognito";
	
		
		$db_conn = mysql_connect("cubist.cs.washington.edu", $username, $password);
		if (!$db_conn) {
			die("Could not connect");
		}
		
		mysql_select_db($db_name, $db_conn);
 
		$uid = $_POST['uid'];

		$cid = $_POST['cid'];
		$query = sprintf("DELETE FROM Attends WHERE uid = %d AND cid = %d;", $uid, $cid);
		$results = mysql_query($query, $db_conn);
		 	
		// Check for errors
		if (!$results) {
			die("Error: " + mysql_error($db_conn));
		}
  
	}

?>
