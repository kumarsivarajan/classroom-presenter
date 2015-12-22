# API #

  * Beta = Beta Release (5/13)
  * FCR = Feature Complete Release (5/20)
  * RC = Release Candidate (5/27)

## Cookie ##
| Key | Value | Database Representation |
|:----|:------|:------------------------|
| uid | int   |  Table=User Column=uid) |
| sid | int   | Table=Session Column=sid|

## Settings ##

<table cellpadding='5' width='1300' border='1'>

<th width='20%'>Function</th>
<th width='35%'>Return</th>
<th width='35%'>Description</th>
<th width='10%'>Devs</th>
<th width='5%'>Release</th>

<tr>
<blockquote><td>exitSession(usrID) </td>
<td>
<pre><code>void<br>
</code></pre>
</td>
<td>exits any open sessions and cleans up db</td>
<td>Amanda</td>
<td>FCR</td>
</blockquote><blockquote></tr></blockquote>


<blockquote></table></blockquote>



## Student/Instructor Survey ##

<table cellpadding='5' width='1300' border='1'>
<th width='20%'>Function</th>
<th width='35%'>Return</th>
<th width='35%'>Description</th>
<th width='10%'>Devs</th>
<th width='5%'>Release</th>

<blockquote><tr>
<blockquote><td>getSurvey(sessionID, filter/sortOption)</td>
<td>
<pre><code>***<br>
</code></pre>
</td>
<td>(for both instr/ student) gets the survey for specific session ( either ordered/filtered or not)</td>
<td>Mike & Robert</td>
<td>FCR</td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>submitFreeResponse(surveyID, text, userId)<br>
/submitMultipleChoice(surveyId, choice)</td>
<td>
<pre><code>void<br>
</code></pre>
</td>
<td>Both of these functions are used by the front end to submit responses to a particular survey depending on whether the survey is a multiple choice question or a free response question. </td>
<td>Mike & Robert</td>
<td>FCR</td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>vote(answerID, studentID) <b>can something be reused from Q&A management</b> </td>
<td>
<pre><code>void<br>
</code></pre>
</td>
<td>submits a vote for a FR answer</td>
<td>Mike & Robert</td>
<td>FCR</td>
</blockquote></tr></blockquote>


<blockquote><tr>
<td>createFR(sessionID, text) / createMC(sessionID, text, choice<a href='.md'>.md</a>)</td>
<td>
<pre><code>void<br>
</code></pre>
</td>
<td>Creates a new FR or MC and attaches to a session. Note that the<br>
survey is initially closed.</td>
<td>Mike & Robert</td>
<td>FCR</td>
</blockquote><blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>startSurvey(surveyID) </td>
<td>
<pre><code><br>
</code></pre>
</td>
<td>starts a survey and associates this survey from now on only with this session</td>
<td>Mike & Robert</td>
<td>FCR</td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>stopSurvey(surveyID) </td>
<td>
<pre><code><br>
</code></pre>
</td>
<td>stops the survey from taking anymore answers, answering is disabled on the student side</td>
<td>Mike & Robert</td>
<td>FCR</td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>getResults(surveyID) </td>
<td>
<pre><code>for MC<br>
 [#, #, #, # ...]<br>
for FR<br>
 [answer, answer, answer ....]<br>
</code></pre>
</td>
<td>returns the answers for the specific survey</td>
<td>Mike & Robert</td>
<td>FCR</td>
</blockquote></tr></blockquote>

</table>

## Timeline ##

<table cellpadding='5' width='1300' border='1'>
<th width='20%'>Function</th>
<th width='35%'>Return</th>
<th width='35%'>Description</th>
<th width='10%'>Devs</th>
<th width='5%'>Release</th>
<blockquote><tr>
<td>getActivity(sessionID, fromTime) </td>
<td>
<pre><code>int<br>
</code></pre>
</td>
<td>gets the numer of "activity" from a starting time</td>
<td>Chris & Robert</td>
<td>FCR</td>
</blockquote><blockquote></tr></blockquote>


<blockquote><tr>
<blockquote><td>getMVQ(sessionID) </td>
<td>
<pre><code>Question, count<br>
</code></pre>
</td>
<td>gets the most voted question</td>
<td>Chris & Robert</td>
<td>FCR</td>
</blockquote></tr>
</table></blockquote>

## Student Home & Feed ##

<table cellpadding='5' width='1300' border='1'>

<th width='20%'>Function</th>
<th width='35%'>Return</th>
<th width='35%'>Description</th>
<th width='10%'>Devs</th>
<th width='5%'>Release</th>

<blockquote><tr>
<blockquote><td>getFeed(sid, username, filter, sort)</td>
<td>
<pre><code>feed[0][0] = 0 or 1 (0 for unchecked, and 1 for checked)<br>
feed[0][1] = "Feed Text"<br>
feed[0][2] = 0 or 1 (0 for unanswered, and 1 for answered)<br>
</code></pre>
</td>
<td>gets the feed for instructors/students.</td>
<td>Mike & Furby</td>
<td>Beta</td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>submitQ(questionID, studentID)</td>
<td>
<pre><code>void<br>
</code></pre>
</td>
<td>submits question to the session that the student is currently in</td>
<td>Mike & Furby</td>
<td>Beta</td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>submitF(feedbackID, studentID)</td>
<td>
<pre><code>void<br>
</code></pre>
</td>
<td>submits feedback to the session that the student is currently in</td>
<td>Mike & Furby</td>
<td>Beta</td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>getAutoComplete(query) </td>
<td>
<pre><code>Array of questions/feedback<br>
</code></pre>
</td>
<td>gets Auto Completion Results for the session the student is currently in</td>
<td>Mike & Furby</td>
<td>Beta</td>
</blockquote></tr>
</table></blockquote>



## Login ##

<table cellpadding='5' width='1300' border='1'>
<th width='20%'>Function</th>
<th width='35%'>Return</th>
<th width='35%'>Description</th>
<th width='10%'>Devs</th>
<th width='5%'>Release</th>

<blockquote><tr>
<blockquote><td>exitSession(userID)</td>
<td>
<pre><code>none<br>
</code></pre>
</td>
<td>If the user is a teacher, close any open sessions. If the user is a student, leave any joined session.</td>
<td>Amanda</td>
<td>FCR</td>
</blockquote></tr>
</table></blockquote>

## Settings ##

<table cellpadding='5' width='1300' border='1'>
<th width='20%'>Function</th>
<th width='35%'>Return</th>
<th width='35%'>Description</th>
<th width='10%'>Devs</th>
<th width='5%'>Release</th>
<tr>
<blockquote><td>getCourses(student/instructor, handlerFunction)</td>
<td>
<pre><code>if a session is open but student hasn't joined<br>
  "coursename, joinSessionButton, removeButton"<br>
if a session is opened and joined<br>
  "coursename, quitSesstionButton, removeButton"<br>
if session is not open<br>
  "coursename, removeButton"<br>
</code></pre>
</td>
<td>Gets the courses for the instructor/student. Lists whether the course is in session or not. If the course is not is session, students who are in the course can not join but instructors will have the option to open the session. When a session is opened, the students in the course will be able to join the session. When a course is in session, the instructor will have the option to close the session in which case all students will kicked out of the session. When a student has joined a course they will have the option to leave the course. </td>
<td>Chris & Robert</td>
<td>Beta</td>
</blockquote><blockquote></tr></blockquote>

<tr>
<blockquote><td>setAlias(studentID, newAlias)</td>
<td>
<pre><code>void<br>
</code></pre>
</td>
<td>Sets the users alias to the new Alias</td>
<td>Chris & Robert</td>
<td>Beta</td>
</blockquote><blockquote></tr></blockquote>

<tr>
<blockquote><td>getAlias(studentID)</td>
<td>
<pre><code>"alias" or if no alias in db, returns "netid".<br>
</code></pre>
</td>
<td>Gets the users alias to the new Alias</td>
<td>Chris & Robert</td>
<td>Beta</td>
</blockquote><blockquote></tr></blockquote>

<tr>
<blockquote><td>updateStudents(courseID, studentID)</td>
<td>
<pre><code>void<br>
</code></pre>
</td>
<td>One student added at a time!</td>
<td>Chris & Robert</td>
<td>Beta</td>
</blockquote><blockquote></tr></blockquote>

<tr>
<blockquote><td>join/exitSession(studentID, sessionID)<code>****</code></td>
<td>
<pre><code>void<br>
</code></pre>
</td>
<td>join: If permitted adds the student to an open session.<br>
exit: removes a student from an open session.  </td>
<td>Chris & Robert</td>
<td>Beta</td>
</blockquote><blockquote></tr></blockquote>

<tr>
<blockquote><td>create/deleteCourse(InstructorID, courseName, mailingList, callbackFunction)</td>
<td>
<pre><code>courseID<br>
</code></pre>
</td>
<td>add: Creates and Adds the course to the instructors lists of courses. Once the course is created instructors will be able to open/close session, Delete the course, and manage participants.<br>
delete: deletes the course and any relevent information from the DB and from the instructors lists of courses.</td>
<td>Chris & Robert</td>
<td>Beta</td>
</blockquote><blockquote></tr></blockquote>

<tr>
<blockquote><td>startSession(courseID)</td>
<td>
<pre><code>sessionID<br>
</code></pre>
</td>
<td>If permitted starts a session for the course chosen.</td>
<td>Chris & Robert</td>
<td>Beta</td>
</blockquote><blockquote></tr></blockquote>

<tr>
<blockquote><td>endSession(sessionID)</td>
<td>
<pre><code>void<br>
</code></pre>
</td>
<td>If permitted ends a session.</td>
<td>Chris & Robert</td>
<td>Beta</td>
</blockquote><blockquote></tr>
</table></blockquote>

## Instructor Feed ##
<table cellpadding='5' width='1300' border='1'>
<th width='20%'>Function</th>
<th width='35%'>Return</th>
<th width='35%'>Description</th>
<th width='10%'>Devs</th>
<th width='5%'>Release</th>

<tr>
<blockquote><td>getFeed(<code>****</code>)</td>
<td>
<pre><code>feed[0][0] = 0 or 1 (0 for unchecked, and 1 for checked)<br>
feed[0][1] = "Feed Text"<br>
feed[0][2] = 0 or 1 (0 for unanswered, and 1 for answered)<br>
</code></pre>
</td>
<td>gets the feed for instructors/students.</td>
<td>Mike & Furby</td>
<td>Beta</td>
</blockquote><blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>setAnswered(questionID)</td>
<td>
<pre><code>void<br>
</code></pre>
</td>
<td>Sets the question as answered by the instructor.</td>
<td>Robert & Chris</td>
<td>Beta</td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>setRead(feedbackID)</td>
<td>
<pre><code>void<br>
</code></pre>
</td>
<td>Sets the feedback as read by the instructor.</td>
<td>Robert & Chris</td>
<td>Beta</td>
</blockquote></tr></blockquote>

<tr>
<blockquote><td>setSpam(question/feedback, studentID, type<code>****</code>)</td>
<td>
<pre><code>void<br>
</code></pre>
</td>
<td>Sets the question/feedback as spam. Also gradually indicates the student as spammer</td>
<td>Robert & Chris</td>
<td>Beta</td>
</blockquote><blockquote></tr></blockquote>

</table>