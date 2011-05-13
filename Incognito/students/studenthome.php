<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
  setcookie('session', $_SERVER['REMOTE_USER']);
?>
	<head>
		<title>Incognito</title>
		
		<script src="instructorfeed.js"></script>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="pages.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="http://yui.yahooapis.com/3.3.0/build/yui/yui-min.js"></script>
		<script type="text/javascript" src="studentUIcontroller.js"></script>
		<script type="text/javascript" src="jquery-1.5.2.js"></script>

	</head>

	<body>
		
		<div id="topbanner"> 	<!-- Includes logo & person's information/help/logout, & course name -->
			<img src="logo.png" alt="logo" />
			<div id="greeting">
				<?php echo 'Hello '.($_COOKIE['session']!='' ? $_COOKIE['session'] : 'Guest') ?> | <a href="studentsettings.php">Your Settings</a> |  <a class="aboutlink" href="help.php">Help</a> | <a href="login.php">Logout</a> <br />
				You are currently looking at [course name].
			</div>
		</div>			

		
		<div id="navigation">	<!-- Navigation bar -->
			<ul>
				<li><span><a class="tab" href="studenthome.php">Home</a></span></li>
				<li><span><a class="tab" href="studentfeed.php">Feed</a></span></li>
				<li><span><a class="tab" href="studentsurveys.php">Surveys</a></span></li>
			</ul>		
		</div>
		
		<div id = "maincontent">
			<form id="submitform">
				<div class="submissioncontent">	<!-- Includes: "Submit as", textbox, & submit button -->
					<div id="typeAreaHome">
						<span>Submit as:
							<label><input type="radio" name="submitType" value="Q" checked="checked"/> Question</label>
							<label><input type="radio" name="submitType" value="F"/> Feedback </label>
						</span>
						<textarea name="texthome" id="ac-input" rows="10" cols="80"></textarea>
					</div>
					<div id="submitbuttondiv"><button type="button" id="submitbutton" onClick="onSubmit()">Submit</button></div>
				</div>
			</form>
		</div>
<script>
YUI({ filter: 'raw' }).use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", function (Y) {
 	states = [





  	     	];

  Y.one('#ac-input').plug(Y.Plugin.AutoComplete, {
    resultFilters    : 'phraseMatch',
    resultHighlighter: 'phraseMatch',
    source           : function(query) {
		$.ajax({
			type: "POST",
			url: "../../DB/lookup_questions.php",
			data: "sid=22222", // still need to retrieve the session ID dynamically.
			success: function(msg){
				data = new Array();
				for (var i = 0; i < msg.length; i++)
				{
					//alert( msg[i].text );
					data[i] = msg[i].text;
				}
			}
		});
		return data;
	}
  });
});
</script>

		
		
		<div class="bottomlinks">	<!-- Links at bottom of page -->
			<a class="aboutlink" href="">Report Bug</a> | 
			<a class="aboutlink" href="help.php">About</a> | 
			<a class="aboutlink" href="help.php">Privacy Policy</a> | 
			<a class="aboutlink" href="help.php">Contact Us</a>
		</div>
		
	</body>
</html>
