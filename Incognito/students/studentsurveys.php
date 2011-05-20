<?php
    include "../doLogin.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Incognito</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="pages.css" type="text/css" rel="stylesheet" />
		<script src="jquery-1.5.2.js" type="text/javascript"></script>
		<script type="text/javascript" src="jquery.cookie.js"></script>
		<script type="text/javascript" src="scripts/StudentSettingsView.js"></script>
        <script type="text/javascript" src="jquery-impromptu.3.1.js"></script>
        <script type="text/javascript" src="scripts/StudentSurveyView.js"></script>
        <script type="text/javascript" src="studentsurveys.js"></script>
	</head>

	<body>
		
		<div id="topbanner"> 
			<a href="studenthome.php"><img src="logo.png" alt="logo" /></a>
			<div id="greeting">
				<span id="cook"><?php echo 'Hello '.($_COOKIE['alias']!='' ? $_COOKIE['alias'] : 'Student') ?></span>
				| <a href="studentsettings.php">Your Settings</a> 
				| <a class="aboutlink" href="../help.php">Help</a> 
				| <a href="scripts/logout.php">Logout</a> <br />
			</div>
		</div>			

		
		<div id="navigation">
			<ul>
				<li <?=($thisPage=='Home') ? ' id="currentpage"' : ' id="home"' ?>><span><a class="tab" href="studenthome.php">Home</a></span></li>
				<li <?=($thisPage=='Feed') ? ' id="currentpage"' : ' id="feedTab"' ?>><span><a class="tab" href="studentfeed.php">Feed</a></span></li>
				<li <?=($thisPage=='Surveys') ? ' id="currentpage"' : ' id="surveys"' ?>><span><a class="tab" href="studentsurveys.php">Surveys</a></span></li>
			</ul>		
		</div>
			
		<div id = "maincontent">
			<div id="filterandsort">
				<span>
					FILTER BY: 
					<select name="filter" id="filter">
                        <optgroup>
                            <option selected="selected"> None </option>
                            <option>Free Response</option>
                            <option>Multiple Choice</option>
                        </optgroup>
					</select>
				</span>
				
				<span>
					SORT BY:
					<a id="newest" >NEWEST</a> | <a id="priority" >HIGHEST PRIORITY</a>
				</span>

			</div>
			
			<div id="feedbox">
				<span>
					<div class="nonSubCol"> Survey Type
					</div>
					<div id="subCol"> Question				
					</div>
					<div class="nonSubCol"> Respond?
					</div>	
					<hr />		
				</span>				
			</div>

			<div id="feed"></div>
            
		</div>

		
		
		<div class="bottomlinks">
			<a class="aboutlink" href="../bugreport.php">Report Bug</a> | 
			<a class="aboutlink" href="http://code.google.com/p/classroom-presenter/wiki/HomePage">About</a> | 
			<a class="aboutlink" >Privacy Policy</a> | 
			<a class="aboutlink" href="mailto:fu11h0use@googlegroups.com ">Contact Us</a>
		</div>
		
	</body>
</html>
