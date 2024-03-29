<?php
	if (!function_exists('connectToDB'))
	{
		function connectToDB()
		{
			// Connect to the database

			include '../../db_credentials.php';

			$db_conn = mysql_connect("cubist.cs.washington.edu", $username, $password);
		 
			if (!$db_conn) {
				die("Failed to connect to the mysql server"); 
			}

			mysql_select_db($db_name, $db_conn);
			return $db_conn;
		}
	}

	if (!function_exists('getQuestions'))
	{
		function getQuestions($sid, $type)
		{
			// This file looks up all questions associated with a given session. It's designed
			// for use with the student home page, so its only parameter is the session ID,
			// and it doesn't support any sorting or filtering of the data.

			$db_conn = connectToDB();
			
			// Since we want data for the autocomplete box, we want to get
			// all questions and feedback in the database.
			$rows = array();
			if ($type == 'Q')
			{
				// Query Question and fetch results
				$query = sprintf("SELECT * FROM Question WHERE sid = %d", $sid);
				$results = mysql_query($query, $db_conn);
				if (!$results)
				{
					die("Error: " . mysql_error($db_conn));
				}
				while($r = mysql_fetch_assoc($results))
				{
					$rows[] = array('text'=>$r["text"],'votes'=>$r["numvotes"],'answered'=>$r["answered"],'type'=>'Q');
				}
			}
			elseif ($type == 'F')
			{
				// Query Feedback and fetch results
				$query = sprintf("SELECT * FROM Feedback WHERE sid = %d", $sid);
				$results = mysql_query($query, $db_conn);
				if (!$results)
				{
					die("Error: " . mysql_error($db_conn));
				}
				while($r = mysql_fetch_assoc($results))
				{
					$rows[] = array('text'=>$r["text"],'votes'=>$r["numvotes"],'isread'=>$r["isread"],'type'=>'F');
				}
			}
			
			mysql_close($db_conn);
			return $rows;
		}
	}
	
	if (isset($_POST['sid']) && isset($_POST['type']))
	{
		$sid = $_POST['sid'];
		$type = $_POST['type'];
		$results = getQuestions($sid, $type);
		
		// Return the questions and feedback back to the calling Javascript
		// as a JSON object
		header('Content-type: application/json');
		echo json_encode($results);
	}
?>
