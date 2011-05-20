<?php
    include "../get_uid.php";
?>
	
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Incognito</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="pages.css" type="text/css" rel="stylesheet" />
		<script src="jquery-1.5.2.js" type="text/javascript"></script>
		<script type="text/javascript" src="jquery.cookie.js"></script>
		<script type="text/javascript" src="instructorSettings.js"></script>
        <script type="text/javascript" src="instructorfeed.js"></script>
        <script type="text/javascript" src="scripts/InstrSettingsView.js"></script>
        <script type="text/javascript" src="scripts/InstrSurveyView.js"></script>
        <script type="text/javascript" src="instructorsurvey.js"></script>
	</head>

	<body>		
		<div id="topbanner"> 		<!-- Includes logo & person's information/help/logout, & feed status -->	
			<a href="instructorfeed.php"><img src="logo.png" alt="logo" /></a>
			<div id="greeting">
				<?php echo 'Hello '.($_COOKIE['alias']!='' ? $_COOKIE['alias'] : 'Guest') ?>  | <a href="instructorsettings.php">Your Settings</a> | <a class="aboutlink" href="help.php">Help</a> | <a href="login.php">Logout</a> <br />
	
			</div>
		</div>			

		
		<div id="navigation">	<!-- Navigation bar -->
			<ul>
				<li><span><a class="tab" href="instructorfeed.php">Feed</a></span></li>
				<li><span><a class="tab" href="instructorfree.php">Surveys</a></span></li>
				<li><span><a class="tab" href="instructorhistory.php">History</a></span></li>
			</ul>		
			<a href=""><span id="timeline">VIEW TIMELINE </span></a>
		</div>
		
		<div id = "maincontent">	
			<div class="submissioncontent">
                <form id="submitform">
				<div id="createSurveyArea">		<!-- Includes: "Create new" types, textbox, create button, and checkbox -->
					<!-- <span>Create New: -->
						<!-- <input id="frButton" type="radio" name="typeSurvey" checked="checked"/> Free Response -->
						<!-- <input id="mcButton" type="radio" name="typeSurvey" /> Multiple Choice -->
					<!-- </span> <br /> -->
                    
                    <span>Create New:
                        <a href="instructorfree.php">Free Response </a> | <a href="instructormultiple.php">Multiple Choice</a> <!--fix these options later! redirect w/ radio buttons-->
                    </span> <br />
					
					<div id="freeArea">
						<input type="textbox" name="textfeed" value="" height="1000" size="100" maxlength="120">
					</div>
                <button type="submit" id="submitbutton" onClick="onCreateFree()">Create</button>
          </form>
				</div>
				<input id="createSurvey" type="checkbox" name="createSurvey" /> I do not want to create a survey.
			</div>
		
		
			<div id="filterandsort">	<!-- Filtering & Sorting -->
				<span>
					FILTER BY: 
					<select name="filter">
						<option selected="selected">None</option>
						<option>Just Created</option>
						<option>Open</option>
						<option>Closed</option>
					</select>
				</span>
				
				<span>
					SORT BY:
					<a href="" >NEWEST</a> | <a href="" >HIGHEST PRIORITY</a>
				</span>				  
			</div>
			
			<div id="feedbox">
				<div class="surveyCol"> Status	<!-- Column names in feed -->
				</div>
				<div class="surveyCol"> Responses				
				</div>
				<div id="surveyQuestCol"> Question
				</div>	
				<div class="surveyCol"> View Responses
				</div>	
				<hr />				
			</div>
			
		</div>

		
		
		<div class="bottomlinks">	<!-- Links at bottom of page -->
			<a class="aboutlink" href="help.php">About</a> | 
			<a class="aboutlink" href="help.php">Privacy Policy</a> | 
			<a class="aboutlink" href="help.php">Contact Us</a>
		</div>
		
	</body>
</html>
