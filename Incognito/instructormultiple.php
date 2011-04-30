<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Incognito</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="pages.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		
		<div id="topbanner">	<!-- Includes logo & person's information/help/logout, & feed status -->			
			<img src="logo.png" alt="logo" />
			<div id="greeting">
				Hello [teacher's name]! | <a href="instructorsettings.php">Your Settings</a> |  <a class="aboutlink" href="help.php">Help</a> | <a href="login.php">Logout</a> <br />
				<a href="">[course name]</a> feed is currently: 
				<label><input type="radio" name="feedstatus" value="Open"/> Open </label>
				<label><input type="radio" name="feedstatus" value="Closed" checked="checked"/> Closed</label>
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
		
			<div id="createSurveyArea">		<!-- Includes: "Create new" types, textbox, create button, and checkbox -->
				<span>Create New:
					<label><input type="radio" name="createSurveyType" value="FR"/> Free Response</label>
					<label><input type="radio" name="createSurveyType" value="MC" checked="checked"/> Multiple Choice </label>
				</span> <br />
				<textarea name="textfeed" rows="2" cols="79">
				</textarea>					
				<button type="submit" id="submitbutton">Create!</button> <br />
				<input type="checkbox" name="createSurvey" /> I do not want to create a survey.
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