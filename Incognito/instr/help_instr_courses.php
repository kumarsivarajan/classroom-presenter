<?php
    include "../doLogin.php";
	include "common_instructor.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Incognito</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="pages.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		
		<?php //Inserting the banner, greeting, and navigation from common_instructor.php
			bannerAndNavigation('Help'); 
		?>
		
		<div id="instrhelpnavigation">
			<a href="help_instr_surveys.php">Survey Management</a> | 
		<a href="help_instr_timeline.php">Timeline</a> | 
		<a href="help_instr_courses.php">Course Management</a> |  
		<a href="help_instr_questions_feedback.php">Questions and Feedback</a> |
		<a href="help_instr_troubleshooting.php">Troubleshooting</a>
		</div>

		
		<div id="maincontent">
			<h1>Course Management</h1>You can use Incognito for multiple classes 
			at once. For each course, you can open and close course sessions, 
			which correspond to individual class sessions. Before your students 
			can use Incognito to submit questions, comments, and survey 
			responses, you must create a course session that they can join.<br />
			<h2>Creating A Course</h2>1.&nbsp;&nbsp;&nbsp;&nbsp; Click on "Your 
			Courses" at the top right of the page.<br />
		2.&nbsp;&nbsp;&nbsp;&nbsp; In the create a course form, give your course a descriptive name (for 
			example, CSE440_spring) and enter a mailing list (optional) in the 
			provided text boxes. <br />
		3.&nbsp;&nbsp;&nbsp;&nbsp; Click "Create."<br />
			<h2>Adding A Student To A Course</h2>1.&nbsp;&nbsp;&nbsp; Click on 
			"Your Courses" at the top right of the page.<br />
			2.&nbsp;&nbsp;&nbsp; In the add students form, type in the course 
			name (the name that is listed in the course list) and the student's 
			CSE NetID.<br />
			3.&nbsp;&nbsp;&nbsp; Click "Add."<br />
			<h2>Opening A Session</h2>1.&nbsp;&nbsp;&nbsp;&nbsp; 
			Click on "Your Courses" at the top right of the page.<br />
		2.&nbsp;&nbsp;&nbsp;&nbsp; Find the course you want to open 
			a session for, and click the "Open Session" button next to the 
			course's name. <br />
			<br />
			<i>Note:</i> Only one session can be open at a time. If another session is 
			open, you must close it before opening another.<br />
			<h2>Closing A Session</h2>1.&nbsp;&nbsp;&nbsp;&nbsp; Click on "Your 
			Courses" at the top right of the page.<br />
		2.&nbsp;&nbsp;&nbsp;&nbsp; 
			Find the session you want to close. If the session is open, there 
			will be a "Close Session" button next to that course's name. <br />
		3.&nbsp;&nbsp;&nbsp;&nbsp; Click the "Close 
			"Session" button. <br />
		</div>

		
		
		<?php //Inserting report a bug, about, privacy policy, contact us links
			bottomLinks();
		?>
		
	</body>
</html>