<?php

	// This file looks up all questions associated with a given session. It's designed to
	// be used with the student feed, so it accepts an additional parameter (the student's alias)
	// and returns a flag indicating whether the student has voted for a given question or feedback
	// instead of the total votes.

	// Connect to the database

	// These variables need to be changed for every person who wants to use their local db.
	// Production DB: ashen; 2kV2cNct; ashen_403_Local
	$username = "ashen";
	$password = "2kV2cNct";
	$db_name = "ashen_403_Local";

	$db_conn = mysql_connect("cubist.cs.washington.edu", $username, $password);
 
	if (!$db_conn) {
		die("Failed to connect to the mysql server"); 
	}

	mysql_select_db($db_name, $db_conn); 
	
	// Now query the database for all of the questions associated
	// with the current session
	$sid = $_POST['sid'];
	$filter = $_POST['filter'];
	$sort = $_POST['sort'];
	$username = $_POST['username'];
    
    // echo $sort;
	
	// Do a preliminary query to get the student's user ID for later use
	$uidquery = sprintf("SELECT uid FROM Student WHERE alias = '%s'", $username);
	$uidresult = mysql_query($uidquery, $db_conn);
	$uidrow = mysql_fetch_assoc($uidresult);
	$uid = (int)$uidrow["uid"];
  
	$feed = array();
	$query = null;
	if ( $filter == "None" )	// no filtering, so query both Question and Feedback
	{
        // echo "Filter By: None</br>";
		$query1 = null;
		$query2 = null;
		if ( $sort == "Newest" )
		{
            // echo "Sorting by: Newest</br>";
			$query1 = sprintf("SELECT * FROM Question WHERE sid = %d ORDER BY time DESC", $sid);
			$query2 = sprintf("SELECT * FROM Feedback WHERE sid = %d ORDER BY time DESC", $sid);
		}
		elseif ( $sort == "Priority" )
		{
            // echo "Sorting by: Priority</br>";
			$query1 = sprintf("SELECT * FROM Question WHERE sid = %d ORDER BY numvotes DESC", $sid);
			$query2 = sprintf("SELECT * FROM Feedback WHERE sid = %d ORDER BY numvotes DESC", $sid);
		}
		else
		{
            // echo "Sorting by: None</br>";
			$query1 = sprintf("SELECT * FROM Question WHERE sid = %d", $sid);
			$query2 = sprintf("SELECT * FROM Feedback WHERE sid = %d", $sid);
		}
		$results = mysql_query($query1, $db_conn);
		while($r = mysql_fetch_assoc($results))
		{
			$qid = (int)$r["qid"];
      // echo $qid;
			$votequery = sprintf("SELECT * FROM QuestionVotedOn WHERE qid = %d AND uid = %d", $qid, $uid);
			$voteresults = mysql_query($votequery, $db_conn);
			$voted = 0;
			if ($vr = mysql_fetch_assoc($voteresults))
			{
				$voted = 1;
			}
			$feed[] = array('voted'=>$voted,'text'=>$r["text"],'answered'=>$r["answered"],'type'=>'Q');
		}
		$results = mysql_query($query2, $db_conn);
		while($r = mysql_fetch_assoc($results))
		{
			$fid = (int)$r["fid"];
      // echo $fid;
			$votequery = sprintf("SELECT * FROM FeedbackVotedOn WHERE fid = %d AND uid = %d", $fid, $uid);
			$voteresults = mysql_query($votequery, $db_conn);
			$voted = 0;
			if ($vr = mysql_fetch_assoc($voteresults))
			{
				$voted = 1;
			}
			$feed[] = array('voted'=>$voted,'text'=>$r["text"],'isread'=>$r["isread"],'type'=>'F');
		}
	}
	elseif ( $filter == "All Questions" )	// we only want questions
	{
        // echo "Filter By: All Questions</br>";
		if ( $sort == "Newest" )
		{
            // echo "Sort By: Newest</br>";
			$query = sprintf("SELECT * FROM Question WHERE sid = %d ORDER BY time DESC", $sid);
		}
		elseif ( $sort == "Priority" )
		{
            // echo "Sort By: Priority</br>";
			$query = sprintf("SELECT * FROM Question WHERE sid = %d ORDER BY numvotes DESC", $sid);
		}
		else
		{
            // echo "Sort By: None</br>";
			$query = sprintf("SELECT * FROM Question WHERE sid = %d", $sid);
		}
		$results = mysql_query($query, $db_conn);
		while($r = mysql_fetch_assoc($results))
		{
			$qid = (int)$r["qid"];
			$votequery = sprintf("SELECT * FROM QuestionVotedOn WHERE qid = %d AND uid = %d", $qid, $uid);
			$voteresults = mysql_query($votequery, $db_conn);
			$voted = 0;
			if ($vr = mysql_fetch_assoc($voteresults))
			{
				$voted = 1;
			}
			$feed[] = array('voted'=>$voted,'text'=>$r["text"],'answered'=>$r["answered"],'type'=>'Q');
		}
	}
	elseif ( $filter == "All Feedback" )	// we only want feedback
	{
        // echo "Filter By: All Feedback</br>";
		if ( $sort == "Newest" )
		{
            // echo "Sort By: Newest</br>";
			$query = sprintf("SELECT * FROM Feedback WHERE sid = %d ORDER BY time DESC", $sid);
		}
		elseif ( $sort == "Priority" )
		{
            // echo "Sort By: Priority</br>";
			$query = sprintf("SELECT * FROM Feedback WHERE sid = %d ORDER BY numvotes DESC", $sid);
		}
		else
		{
            // echo "Sort By: None</br>";
			$query = sprintf("SELECT * FROM Feedback WHERE sid = %d", $sid);
		}
		$results = mysql_query($query, $db_conn);
		while($r = mysql_fetch_assoc($results))
		{
			$fid = (int)$r["fid"];
      // echo $fid;
			$votequery = sprintf("SELECT * FROM FeedbackVotedOn WHERE fid = %d AND uid = %d", $fid, $uid);
			$voteresults = mysql_query($votequery, $db_conn);
			$voted = 0;
			if ($vr = mysql_fetch_assoc($voteresults))
			{
				$voted = 1;
			}
			$feed[] = array('voted'=>$voted,'text'=>$r["text"],'isread'=>$r["isread"],'type'=>'F');
		}
	}
	elseif ( $filter == "Answered" )	// we only want answered questions
	{
        // echo "Filter By: Answered</br>";
		if ( $sort == "Newest" )
		{
            // echo "Sort By: Answered</br>";
			$query = sprintf("SELECT * FROM Question WHERE sid = %d AND answered = 1 ORDER BY time DESC", $sid);
		}
		elseif ( $sort == "Priority" )
		{
            // echo "Sort By: Priority</br>";
			$query = sprintf("SELECT * FROM Question WHERE sid = %d AND answered = 1 ORDER BY numvotes DESC", $sid);
		}
		else
		{
            // echo "Sort By: None</br>";
			$query = sprintf("SELECT * FROM Question WHERE sid = %d AND answered = 1", $sid);
		}
		$results = mysql_query($query, $db_conn);
		$feed = array();
		while($r = mysql_fetch_assoc($results))
		{
			$qid = (int)$r["qid"];
			$votequery = sprintf("SELECT * FROM QuestionVotedOn WHERE qid = %d AND uid = %d", $qid, $uid);
			$voteresults = mysql_query($votequery, $db_conn);
			$voted = 0;
			if ($vr = mysql_fetch_assoc($voteresults))
			{
				$voted = 1;
			}
			$feed[] = array('voted'=>$voted,'text'=>$r["text"],'answered'=>$r["answered"],'type'=>'Q');
		}
	}
	elseif ( $filter == "Unanswered" )	// we only want unanswered questions
	{
        // echo "Filter By: Unanswered</br>";
		if ( $sort == "Newest" )
		{
            // echo "Sort By: Newest</br>";
			$query = sprintf("SELECT * FROM Question WHERE sid = %d AND answered = 0 ORDER BY time DESC", $sid);
		}
		elseif ( $sort == "Priority" )
		{
            // echo "Sort By: Priority</br>";
			$query = sprintf("SELECT * FROM Question WHERE sid = %d AND answered = 0 ORDER BY numvotes DESC", $sid);
		}
		else
		{
            // echo "Sort By: None</br>";
			$query = sprintf("SELECT * FROM Question WHERE sid = %d AND answered = 0", $sid);
		}
		$results = mysql_query($query, $db_conn);
		$feed = array();
		while($r = mysql_fetch_assoc($results))
		{
			$qid = (int)$r["qid"];
			$votequery = sprintf("SELECT * FROM QuestionVotedOn WHERE qid = %d AND uid = %d", $qid, $uid);
			$voteresults = mysql_query($votequery, $db_conn);
			$voted = 0;
			if ($vr = mysql_fetch_assoc($voteresults))
			{
				$voted = 1;
			}
			$feed[] = array('voted'=>$voted,'text'=>$r["text"],'answered'=>$r["answered"],'type'=>'Q');
		}
	}
	elseif ( $filter == "Unread" )	// we only want unread feedback
	{
        // echo "Filter By: Unread</br>";
		if ( $sort == "Newest" )
		{
            // echo "Sort By: Newest</br>";
			$query = sprintf("SELECT * FROM Feedback WHERE sid = %d AND isread = 0 ORDER BY time DESC", $sid);
		}
		elseif ( $sort == "Priority" )
		{
            // echo "Sort By: Priority</br>";
			$query = sprintf("SELECT * FROM Feedback WHERE sid = %d AND isread = 0 ORDER BY numvotes DESC", $sid);
		}
		else
		{
            // echo "Sort By: None</br>";
			$query = sprintf("SELECT * FROM Feedback WHERE sid = %d AND isread = 0", $sid);
		}
		$results = mysql_query($query, $db_conn);
		while($r = mysql_fetch_assoc($results))
		{
			$fid = (int)$r["fid"];
      // echo $fid;
			$votequery = sprintf("SELECT * FROM FeedbackVotedOn WHERE fid = %d AND uid = %d", $fid, $uid);
			$voteresults = mysql_query($votequery, $db_conn);
			$voted = 0;
			if ($vr = mysql_fetch_assoc($voteresults))
			{
				$voted = 1;
			}
			$feed[] = array('voted'=>$voted,'text'=>$r["text"],'isread'=>$r["isread"],'type'=>'F');
		}
	}
	elseif ( $filter == "Read" )	// we only want read feedback
	{
        // echo "Filter By: Read</br>";
		if ( $sort == "Newest" )
		{
            // echo "Sort By: Newest</br>";
			$query = sprintf("SELECT * FROM Feedback WHERE sid = %d AND isread = 1 ORDER BY time DESC", $sid);
		}
		elseif ( $sort == "Priority" )
		{
            // echo "Sort By: Priority</br>";
			$query = sprintf("SELECT * FROM Feedback WHERE sid = %d AND isread = 1 ORDER BY numvotes DESC", $sid);
		}
		else
		{
            // echo "Sort By: None</br>";
			$query = sprintf("SELECT * FROM Feedback WHERE sid = %d AND isread = 1", $sid);
		}
		$results = mysql_query($query, $db_conn);
		while($r = mysql_fetch_assoc($results))
		{
			$fid = (int)$r["fid"];
      // echo $fid;
			$votequery = sprintf("SELECT * FROM FeedbackVotedOn WHERE fid = %d AND uid = %d", $fid, $uid);
			$voteresults = mysql_query($votequery, $db_conn);
			$voted = 0;
			if ($vr = mysql_fetch_assoc($voteresults))
			{
				$voted = 1;
			}
			$feed[] = array('voted'=>$voted,'text'=>$r["text"],'isread'=>$r["isread"],'type'=>'F');
		}
	}
  
  echo $feed[0][0];
	
  
	/*
	$query = sprintf("SELECT * FROM Question WHERE sid = %d", $sid);
	$results = mysql_query($query, $db_conn);
	$rows = array();
	while($r = mysql_fetch_assoc($results))
	{
		$rows[] = array('text'=>$r["text"],'votes'=>$r["numvotes"],'answered'=>$r["answered"],'type'=>'Q');
	}
	
	$query = sprintf("SELECT * FROM Feedback WHERE sid = %d", $sid);
	$results = mysql_query($query, $db_conn);
	while($r = mysql_fetch_assoc($results))
	{
		$rows[] = array('text'=>$r["text"],'votes'=>$r["numvotes"],'isread'=>$r["isread"],'type'=>'F');
	}
	*/
	
    // Prints the feed data in a nice html format
    echo "<table id=feedTable>";
    for($row = 0; $row < 5; $row++) {
        if(!empty($feed[$row])) {
            if($row % 2 == 1)
                echo "<tr class=alt>";
            else
                echo "<tr>";
            if($feed[$row]["voted"] == 1)
                echo "<td class=check><input type=checkbox id=check checked=true /></td>";
            else
                echo "<td class=check><input type=checkbox id=check /></td>";
            echo "<td class=feed>".$feed[$row]["text"]."</td>";
            echo "<td class=answered>".$feed[$row]["answered"]."</td>";
            echo "</tr>";
        }
    }
    echo "</table>";

?>
	
