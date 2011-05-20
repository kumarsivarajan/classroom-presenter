<?php

	// This php script will return all surveys given a session id
	// that the surveys belong too. In addition, this php script
	// takes variables indicating how the results are to be filtered/sorted.
	//
	// Filtering arguments: 'mc' for only multiple choice
	//						'fr' for only free response
	//						'none' for no filters
	//
	// Sorting Arguments: 	'mr' for most recent surveys
	//						'none' for no sorting

	// Get our current db_crendentials
	include 'db_credentials.php';		

	// Check for the correct arguments
	if (isset($_POST['sid']) && isset($_POST['filter']) && isset($_POST['sort'])) {
		
		// Connect and select the correct database
		$db_conn = mysql_connect("cubist.cs.washington.edu", $username, $password);
		if (!$db_conn) {
			die("Could not connect");
		}
		
		mysql_select_db($db_name, $db_conn);
		
		// Now start building our query
		$query = ""; 
		
		// Check the filter argument
		$filter = $_POST['filter'];
		$sid = $_POST['sid'];
		if ($filter == 'mc') {
			$query = sprintf("SELECT mc.sid, mc.text FROM Survey s, MultipleChoice mc 
								WHERE s.sid = mc.sid AND s.sessionId = %d", $sid); 
		} else if ($filter == 'fr') {
			$query = sprintf("SELECT fr.sid, fr.text FROM Survey s, FreeResponse fr 
								WHERE s.sid = fr.sid AND s.sessionId = %d", $sid);
		} else if ($filter == 'none') {
			$query = sprintf("SELECT * FROM ((SELECT s.sid, mc.text FROM Survey s, 
								MultipleChoice mc WHERE s.sid = mc.sid 
								AND s.sessionId = %d) UNION 
								(SELECT s.sid, fr.text FROM Survey s, 
								FreeResponse fr WHERE s.sid = fr.sid AND 
								s.sessionId = %d)) as sub", $sid, $sid);
		} else {
			die("Incorrect filter argument");
		}
			
		// Now check the sort argument
		$sort = $_POST['sort'];
		if ($sort == 'mr' && $filter == 'none') {
			$query = $query . " ORDER BY sub.sid DESC;";
		} else if ($sort == 'mr') {
			$query = $query . " ORDER BY s.sid DESC;"; 
		} else if ($sort == 'none') {
			$query = $query . ";";
		} else {
			die("Incorrect sort argument"); 
		}
		
		// Now run the query and return the results
		$results = mysql_query($query, $db_conn);
		
		// Error Check
		if (!$results) {
			die("Error: " . mysql_error($db_conn));
		}
		
		// For now I am just going to echo a json_encoded array,
		// this can change later if we want to echo direct HTML code
		$rows;
		$i = 0;
		while ($row = mysql_fetch_row($results)) {
			$rows[$i] = $row;
			$i = $i + 1;  
		} 
		echo json_encode($rows); 
	}

?>
