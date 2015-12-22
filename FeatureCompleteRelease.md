## Features ##

  * Student and Instructor Surveys: Incognito allows Instructors to open polls and free response questions for the class. Students can submit their answers anonymously.
  * Timeline graph: This allows the instructor to monitor the activity of the feed with the least distraction. The timeline will show the activity as a line graph. If there is a huge spike it would indicate to the instructor that the majority of the class is having concerns with the certain part of the lecture.
  * Bug Report : Allows user to submit bug reports to the devs.
  * Help Page: Gives users a place to seek help.

## What works? ##
At this point Use case 2, 3 are also available as well as most of the Survey and Login/Logout functionality.

<table cellpadding='5' border='1'>
<th>Functionality</th>
<th>Description</th>
<th>Front End</th>
<th>Back End</th>
<th>Dev Verification</th>
<th>PM(QA) Verification</th>

<tr>
<blockquote><td>
Login<br>
</td>
<td>
Allows for a user to login and have all the user data loaded to the front end.<br>
<p />This is a bit buggy in certain circumstances. There seems to be a fairly working version at <a href='http://cubist.cs.washington.edu/~ashen/Incognito/login.php'>http://cubist.cs.washington.edu/~ashen/Incognito/login.php</a>
</td>
<td>
Amanda<br>
</td>
<td>
Amanda<br>
</td>
<td>
0.5 days<br>
</td>
<td>
Yes, (Small <a href='http://code.google.com/p/classroom-presenter/issues/detail?id=22'>bug</a> on Instructor side)<br>
</td>
</tr></blockquote>

<tr>
<blockquote><td>
Logout<br>
</td>
<td>
Allows for a user to logout and have all the user data removed. Also cleans up the db for logout. Same as login, there seems to be a bit buggy and the version that works the best is located here: <a href='http://cubist.cs.washington.edu/~ashen/Incognito/login.php'>http://cubist.cs.washington.edu/~ashen/Incognito/login.php</a>.<br>
</td>
<td>
Amanda<br>
</td>
<td>
Amanda<br>
</td>
<td>
Yes<br>
</td>
<td>
Yes<br>
</td>
</tr></blockquote>

<tr>
<blockquote><td>
Display the Survey feed<br>
</td>
<td>
Displays all survey associated with a specific session. Instructor and student should be able to sort/filter.<br>
</td>
<td>
Mike<br>
</td>
<td>
Robert<br>
</td>
<td>
Yes (Student side)<br>
</td>
<td>
No<br>
</td>
</tr></blockquote>

<tr>
<blockquote><td>
Multiple choice survey on student/instructor side<br>
</td>
<td>
For an open MC survey,<br>
<ul><li>a teacher will be able to view the choices<br>
</li><li>the student will be able to <b>choose a choice and submit answer (only once)</b>
</li></ul>For a closed survey,<br>
<ul><li>Instructor<br>
<ul><li>if results have been submitted (aka it has been opened already and closed), display results. (can open again but must wipe previous results)<br>
</li><li>if no results have been submitted, just display choices<br>
</li></ul></li><li>Student<br>
<ul><li>If the survey has not been opened at all, no choices shown.<br>
</li><li>if the survey was opened and then closed, show choices.<br>
</li></ul></li></ul></td>
<td>
Mike<br>
</td>
<td>
Robert<br>
</td>
<td>
No<br>
</td>
<td>No</td>
</tr></blockquote>

<tr>
<blockquote><td>
Free Response on student/instructor side<br>
</td>
<td>
For an open FR survey<br>
<ul><li>a teacher will be able to see the answers being submitted<br>
</li><li>a student will be able to <b>see the answers being submitted and vote it up</b> or <b>submit an answer (only one)</b>
</li></ul>For a closed FR survey<br>
<ul><li>only show the answer to both students and isntructors<br>
</li></ul></td>
<td>
Mike<br>
</td>
<td>
Robert<br>
</td>
<td>Yes<br>
</td>
<td>Yes</td>
</tr>
<tr>
<td>
Survey Framework<br>
</td>
<td>
Instructor is able to<br>
</blockquote><ul><li><b>create a survey</b>
</li><li><b>delete a survey</b>
</li><li><b>start a survey</b>
</li><li><b>close a survey</b>
</li><li><b>edit a survey</b> (stretch if needed?)<br>
</li></ul><blockquote></td>
<td>
Mike<br>
</td>
<td>
Robert<br>
</td>
<td>
Yes<br>
</td>
<td>no</td>
</tr>
<tr>
<td>
Bug Reporting<br>
</td>
<td>
Allows user to submit a bug report that developers will receive in an organized and managable format.<br>
</td>
<td>
Christopher<br>
</td>
<td>
Christopher<br>
</td>
<td>
Yes<br>
</td>
<td>
No<br>
</td>
</tr>
<tr>
<td>
Help Page<br>
</td>
<td>
Gives Users (different for users and isntructors) a simple guide on how to use the major parts of our system in an organized and clear manner.<br>
</td>
<td>
Christopher<br>
</td>
<td>
Christopher<br>
</td>
<td>
Yes<br>
</td></blockquote>

<blockquote><td>
No<br>
</td>
</tr></blockquote>

<tr>
<blockquote><td>
Time line<br>
</td>
<td>
Allows Instructors to monitor the feed in a clear, concise and non intrusive way.<br>
</blockquote><ul><li>Line graph should display the current sessions activity.<br>
</li><li>graph is clickable and directs to the feed<br>
</li><li>Displays most voted question (Stretch feature if needed)<br>
</li></ul><blockquote></td>
<td>
Christine<br>
</td>
<td>
Robert<br>
</td>
<td>
Yes<br>
</td>
<td>
Yes<br>
</td></blockquote>

</tr>

</table>


## Testing ##
Testing of the system and usability testing has been moved to next week due to the work load.

## Living Document Update ##

| Document | Description |
|:---------|:------------|
| [Development Schedule](http://code.google.com/p/classroom-presenter/wiki/DevelopmentSchedule#Feature_Complete_Release_5/18) | Updated Beta Release results |
| [API](http://code.google.com/p/classroom-presenter/wiki/Api?ts=1305781016&updated=Api#Settings) | Updated API with FCR library |
| [User Docs](http://code.google.com/p/classroom-presenter/wiki/UserDocumentation) | Updated How-to for users |
| [Bug Reporting](http://code.google.com/p/classroom-presenter/wiki/BugReporting?ts=1305933870&updated=BugReporting) | Our FCR implementation of Bug reporting and it's details. |
