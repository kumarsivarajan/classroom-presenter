### Anchors ###
Results of our Manual test plans can be found [here](http://code.google.com/p/classroom-presenter/wiki/ManualTestResults) on the wiki.

[TestPlans#System\_Test](TestPlans#System_Test.md): Manual System Test

[TestPlans#Unit\_Tests](TestPlans#Unit_Tests.md) : Front End Unit Tests (Manual)

[TestPlans#Backend\_Unit\_Tests](TestPlans#Backend_Unit_Tests.md) : Backend Unit Test


## Testing Overview and Plan ##

It is pretty common in the industry for developers to write their own unit tests for the functions that they write. For our group this will be the strategy that is adopted. Each developer will make sure that for every function that is written there is a unit test. Since the developer will be responsible for writing unit tests, this will cover the white box testing. Then for each feature, our designated testers will perform black box testing to ensure the that the class has the correct functionality to meet the requirements. In addition we will automate the black box testing by using Selenium.

Since most of the team members do not have to much experience with testing from a classroom environment, it will be critical to work together in finding valid test sets that can validate the system as a whole against all possible inputs. The tests will be automated using Hudson to run every day if needed or every other day since we have such a short development cycle. As the tests are run, we will make sure to catch issues early and fix them before moving on to the next feature. This will ensure that the developers are able to reflect and learn from their mistakes and increase the quality of the next feature. We will only send the build to production if it at the least 98% of both the unit tests and automated tests.

The main aspects of the code that are of top priority to be tested are correctness, compatibility and reliability and are the basic requirements of the website for our beta release. We want to make sure that the application works correctly as a whole with the expected traffic. To guarantee correctness, our black box tests should ensure that the functionality of the features are correct. In order to ensure reliability, an initial idea that we had was to run exhaustive tests by simulating multiple students interacting at the same time with the server or multiple courses in progress running on the server. However, we will have to manually test the compatibility of the application on different platforms and web browsers.

The usability tests will rely heavily on scheduling meetings with students and instructors. We really hope that most UI issues will have been covered by our paper prototyping, thus we will be focusing on the usability of the features. So far for the course we have two professors, Fogarty and Stepp, who are on board in testing the instructor side of our application. In addition, we will be spending time doing usability tests with random students to ensure that the student side of our application.

UPDATE: We were able to meet with Professor Fogarty. During our meeting, he was able to test the usability of Instructor-side functionalities in a simulated classroom setting where members of the group acted as students. In our meeting with him, we were able to identify bugs that had not yet been discovered and were fixed after this meeting. We were unfortunately not able to meet with Marty due to conflicting schedules. In order to test the usability for students, we randomly chose students in Odegaard and were able to get both individual students as well as multiple students accessing Incognito simultaneously.

# Manual Test Plans #
## System Test ##
> This manual system test will test the all the main features of the site. To execute the manual system test please ensure the following first. Devs that are assigned to execute the manual system test and manual front end unit tests will document the results [here](http://code.google.com/p/classroom-presenter/wiki/ManualTestResults).
  * You have a clean DB

START
  1. Open up two browsers side by side
  1. Login as a student in one browser and verify the following in the DB
    * You are in the user table with a uid.
    * You are in the student table with the same uid.
  1. Now add that uid to the instructor table manually. (We don't handle new users who are both instructor and student as of (RC)
  1. Login as an instructor in the other browser. (IB-Instructor Browser, SB-Student Browser)
  1. Once logged in verify the following
    * Check your cookies in both IB and SB.
    * The uid should be your uid.
    * # Open up two browsers side by side
  1. Login as a student in one browser and verify the following in the DB
    * You are in the user table with a uid.
    * You are in the student table with the same uid.
  1. Now add that uid to the instructor table manually. (We don't handle new users who are both instructor and student as of FCR)
  1. Login as an instructor in the other browser. (IB-Instructor Browser, SB-Student Browser)
  1. Once logged in verify the following
    * Check your cookies in both IB and SB.
    * The uid should be your uid.
    * There should be no sid.
      * If you get an sid, click logout in the corresponding browser and login again and verify that there is no sid
      * If the sid is still there then there is an Issue.
    * In IB you are directed to the Feed page, and that the Feed tab is highlighted
    * In the SB you are directed to the Home page, and that the Home page is highlighted
    * You are still the only one in the instructor table in the DB.
  1. In SB, go to the settings page and verify:
    * There are no courses in the course list.
    * Nothing in the navigation bar is highlighted.
  1. Do the same for IB
  1. In IB, add a new course called Sys\_test with sys@test.com as the mailing list and verify
    * The course is added in the Course Table and Teaches Table
    * An open? button, Delete button, and add student text area + button appear next to the course.
  1. Add a yourself to the course.
    * Verify that you see the course in your SB with a delete button
  1. In IB, open a session.
    * Verify that the open  button is replaced by a close button
    * Verify that the close button is gone.
    * Verify an sid in your cookies. (check that it matches DB, table session.)
  1. In SB, join the session.
    * Verify that the Join session button is replaced by a quit session button
    * Verify that the delete button is gone.
    * Verify an sid in your cookies. (check that it matches the DB and that of the IB)
  1. In IB go to the Survey Page --> Feed page.
    * Verify the highlighting of the tab is consistent to where you are
    * Verify that the two pages are empty with no data
  1. In SB go to the Survey Page --> Feed Page --> Home Page
    * Verify the highlighting of the tab is consistent to where you are
    * Verify that the two pages are empty with no data
  1. In SB on the Home Page, submit a question: System test, question 1
  1. In the SB on the Home Page, submit a Feedback: System test, feedback 1
  1. Now with Question selected type in "sys"
    * Verify that auto completion happens
    * Only "System test, question 1" appears
    * Verify that  "System test, feedback 1" does not appear in the auto complete options
  1. Now with Feedback selected type in "sys"
    * Verify that auto completion happens
    * Only "System test, feedback 1" appears
    * Verify that  "System test, question 1" does not appear in the auto complete options
  1. Now in the feed page submit the following:
    * Feedback: System test, feedback 2
    * Question: System test, question 1
  1. Verify:
    * Verify that all q's and f's appear in the feed.
  1. In IB check q1 and f1 to be read/answered
    * Verify that in SB that answered/read has changed to yes for q1 and f1
  1. Verify all filters in both IB and SB
  1. Change votes for one of q1 and f1 in the db and Verify sort by's
  1. Vote for q2 in SB and verify that the votes have incremented in the IB.
  1. Go to Surveys page in both IB and SB
  1. Create a FR survey: "System test, FR1" and an MC survey: "System test, MC1" in IB
    * Verify that it appears now in the IB but not the SB
    * There is a start survey
  1. Now with FR selected type in "sys"
    * Verify that auto completion happens
    * Only "System test, FR1" appears
    * Verify that  "System test, MC1" does not appear in the auto complete options
  1. Now with MC selected type in "sys"
    * Verify that auto completion happens
    * Only "System test, MC1" appears
    * Verify that  "System test, FR1" does not appear in the auto complete options
  1. Now start the FR survey in the IB
    * Verify that it appears in the SB with a respond button
  1. In the SB respond to the survey
    * Verify that you can see that answer in IB
  1. In the SB repond again to the survey
    * Verify that the old answer is still there. The new answer does not overwrite the old one.
  1. Close the survey in the IB
    * Verify that the survey is gone from the SB
  1. Start the MC survey in the IB
    * Verify that you can see it in the SB
  1. Answer the MC survey in the SB
    * Verify that you can see the answer in the IB
  1. Close the MC survey in the IB
    * Verify that you cannot see the survey anymore in the SB
  1. Quit the session in the SB
    * Verify that the Feed and Survey Feed in the SB are empty now
    * Verify that nothing changed in the IB
  1. In the SB, join the session again in the settings page
    * Verify that the feed and survey feed are back again and accurate (against IB)
  1. In the IB, go back to the settings page and close the session
    * Verify in the SB settings page that the session is closed, student has been kicked
    * Verify that the Feed and Survey Feed are both empty on both the IB and SB
    * Verify that in the IB that there is an open? button and a delete button
    * Verify in the DB that the session and all q/f/mc/fr are deleted too.
  1. Open the session again
    * Verify that the session id is changed
    * Verify that the feed and survey feed are clear
  1. In SB join the session again, logout, login.
    * Verify that you are not in any session.
  1. In SB join the session again and have in the IB logout.
    * Verify in the SB that the student is in not in any session
    * Feed and Survey are clear.
END
## Unit Tests ##
### Login/Logout Component ###
<table cellpadding='5' width='1300' border='1'></li></ul></li></ul>

<th width='5%'>Test #</th>
<th width='10%'>Test Description</th>
<th width='30%'>Test Plan</th><th width='30%'>Expected</th>

<blockquote><tr>
<blockquote><td>1</td>
> > <td>
Check to make sure Login is functioning correctly. </td>
> > <td>
Pre: Make sure you are not joined into any sessions. (Can verify through DB)<br>
</blockquote>  * Login (student/instructor)
  * Bring up cookies view using FireBug or CTR+SHFT+I in Chrome
> > </td>
<blockquote><td>
</blockquote>    * There should only be a uid set by Incognito.
    * uid should be your uid.
> > > </td>
</blockquote></li></ul></li></ul><blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>2</td>
<td>
Check to make sure Login is functioning correctly. </td>
<td>
Pre: Make sure you are joined into a sessions/ have a session open. (Can verify through DB)<br>
</blockquote><ul><li>Login (student/instructor)<br>
</li><li>Bring up cookies view using FireBug or CTR+SHFT+I in Chrome<br>
<blockquote></td>
<td>
</blockquote></li></ul></blockquote><ul><li>Both uid and sid should be set by Incognito.<br>
</li><li>Verify that it is the sid for the session that you are currently in.<br>
</li><li>uid is your uid.<br>
<blockquote></td>
</blockquote></li></ul><blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>3</td>
<td>
Check to make sure Logout works. (student side)</td>
<td>
Pre: Make sure you are joined into a session. (DB verification)<br>
</blockquote></blockquote><ul><li>Login<br>
</li><li>(Test 2 must already pass, otherwise this one is a <i>failed</i> test)<br>
</li><li>Logout<br>
<blockquote></td>
<td>
</blockquote><ul><li>You should not be joined into any session. (DB verification)<br>
</li><li>Your uid and sid should not be in the cookie.<br>
<blockquote></td>
</blockquote></li></ul></li></ul><blockquote></tr></blockquote>

<tr>
<blockquote><td>4</td>
<td>
Check to make sure Logout works. (instructor side)<br>
<blockquote></td>
</blockquote><td>
Pre: Login and make sure you have an open session and that you have at least one student in that session.<br>
</blockquote><ul><li>(Note the session id)<br>
</li><li>(Test 2 must already pass)<br>
</li><li>Logout<br>
<blockquote></td>
<td>
</blockquote></li></ul><ul><li>Make sure that the session is closed.<br>
</li><li>Make sure no students is joined into this session anymore (joined table)<br>
</li><li>Make sure sid and uid are no longer in the cookie.<br>
<blockquote></td>
</blockquote></li></ul><blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>5</td>
<td>Test to make sure a new user can login successfully</td>
<td>
- Delete yourself from the User, Student and Instructor Table.<br>
- a)Login as a student  b) Login as an Instructor<br>
</td>
<td>
a) You are assigned a uid, and added to User, Student tables<br>
b) You are assigned a uid, and added to User, Instructor tables<br>
NOTE: at FCR you can only be a student XOR an instructor<br>
</td>
</blockquote></tr>
</table></blockquote>

<h3>Student Courses Component</h3>
<ul><li>Login/Logout Tests must pass<br>
<table cellpadding='5' width='1300' border='1'></li></ul>

<th width='5%'>Test #</th>
<th width='10%'>Test Description</th>
<th width='30%'>Test Plan</th><th width='30%'>Expected</th>

<blockquote><tr>
<blockquote><td>1</td>
<td>Tests displaying current courses attended functionality</td>
<td>
<ul><li>Add a row to the Course table with values (999, testcourse, a@a.com)<br>
</li><li>Add a row to the Attends table with values (<your uid>, 999)<br>
</li><li>Add a row to the Session table with values (cid: 999, open: 0, uid: <your uid>)<br>
</li><li>Go to your students settings page<br>
</li></ul></td>
<td>
You should see Course "testcourse" and a delete button under "Your current courses"<br>
</td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>2</td>
<td>Tests joining an open session functionality</td>
<td>
</blockquote><ul><li>Do Test 1 first<br>
</li><li>Add row to the Session table with values (cid: 999, open: 1, uid: <your uid>)<br>
</li><li>Refresh the settings page<br>
</li><li>Click Join session<br>
</li></ul><blockquote></td>
<td>
</blockquote><ul><li>You should see a join session button and a delete button--> quit session button and a delete button<br>
</li><li>DB verification: Make sure your uid+session id is added to Joined table<br>
</li><li>Verify that the session id you see in the table is the same as the one in your cookies<br>
</li></ul><blockquote></td>
</blockquote></tr></blockquote>


<blockquote><tr>
<blockquote><td>3</td>
<td>Tests leaving a session functionality</td>
<td>
</blockquote><ul><li>Do Test 2 first<br>
</li><li>Click Quit session button<br>
</li></ul><blockquote></td>
<td>
</blockquote><ul><li>Button should change to join session?<br>
</li><li>sid should be removed from cookies<br>
</li><li>Row should be removed from the Joined table<br>
</li></ul><blockquote></td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>4</td>
<td>Tests delete a course functionality</td>
<td>
</blockquote><ul><li>Do Test 1<br>
</li><li>Click delete next to testcourse<br>
</li></ul><blockquote></td>
<td>
</blockquote><ul><li>Course should dissapear from list.<br>
</li></ul><blockquote></td>
</blockquote></tr>
</table></blockquote>

<h3>Student Home</h3>
<table cellpadding='5' width='1300' border='1'>

<th width='5%'>Test #</th>
<th width='10%'>Test Description</th>
<th width='30%'>Test Plan</th><th width='30%'>Expected</th>
<blockquote><tr>
<blockquote><td>1</td>
<td>Check to make sure submitting question functions correctly.</td>
<td>
Pre: You are logged in and have already joined a session.<br>
</blockquote><ul><li>Verify that Submit as type is “Question”<br>
</li><li>Type question (“Why is the sky blue?”) into the input text field<br>
</li><li>Submit question.<br>
</td>
</li></ul><blockquote><td>
</blockquote><ul><li>Textarea where you inputted your question should be clear.<br>
</li><li>DB Verification: make sure your question is added to the Question table (along with qid, number of votes==0, answered==0, sid, and timestamp).</td>
</li></ul></tr></blockquote>

<blockquote><tr>
<blockquote><td>2</td>
<td>Check to make sure submitting feedback functions correctly.</td>
<td>
</blockquote><ul><li>Verify that Submit as type is “Feedback”<br>
</li><li>Type question (“Your writing too small on the whiteboard – can’t see. ”) into the input text field<br>
</li><li>Submit feedback.</td>
</li></ul><blockquote><td>
</blockquote><ul><li>Textarea where you inputted your question should be clear.<br>
</li><li>DB Verification: make sure your feedback is added to the Feedback table (along with fid, number of votes==0, isread==0, sid, and timestamp).</td>
</li></ul></tr></blockquote>

<blockquote><tr>
<blockquote><td>3</td>
<td>Check to make sure autocomplete functions correctly.</td>
<td>
</blockquote><ul><li>Do test 1.<br>
</li><li>Start typing question (“Why is the sky blue?”) into the textarea.<br>
</li><li>As you are typing, question (“Why is the sky blue?”) should appear below the input text field.<br>
</li><li>Select question from input text field.<br>
</li><li>Submit question.</td>
</li></ul><blockquote><td>
</blockquote><ul><li>Textarea where you inputted your question should be clear.<br>
</li><li>DB Verification: make sure your question is added to the Question table (along with qid, number of votes (which should now be incremented by 1), answered, sid, and timestamp) as well as the QuestionVotedOn table (which should have uid and qid).</td>
</li></ul></tr>
</table>
<h3>Student Feed</h3>
<table cellpadding='5' width='1300' border='1'></blockquote>

<th width='5%'>Test #</th>
<th width='10%'>Test Description</th>
<th width='30%'>Test Plan</th>
<th width='30%'>Expected</th>
<blockquote><tr>
<blockquote><td>1</td>
<td>Check to make sure submitting a new question functions correctly.</td>
<td>Pre: You are logged in and have already joined a session<br>
</blockquote><ul><li>Verify that "Submit as:" type is “Question”<br>
</li><li>Type question (“Why is the sky blue?”) into the input text field.<br>
</li><li>Submit question.<br>
</td>
</li></ul><blockquote><td>
</blockquote><ul><li>In the feed area, your question (“Why is the sky blue?”) should appear.<br>
</li><li>Input text field where you inputted your question should be clear.<br>
</li><li>DB Verification: make sure your question is added to the Question table (along with qid, number of votes, answered, sid, and timestamp).<br>
</td>
</li></ul></tr></blockquote>

<blockquote><tr>
<blockquote><td>2</td>
<td>Check to make sure submitting feedback functions correctly.</td>
<td>Pre: You are logged in and have already joined a session<br>
</blockquote><ul><li>Verify that "Submit as:" type is “Feedback”<br>
</li><li>Type question (“Your writing too small on the whiteboard – can’t see. ”) into the input text field.<br>
</li><li>Submit feedback.<br>
</td>
</li></ul><blockquote><td>
</blockquote><ul><li>In the feed area, your feedback (“Your writing too small on the whiteboard – can’t see.”) should appear.<br>
</li><li>Input text field where you inputted your feedback should be clear.<br>
</li><li>DB Verification: make sure your feedback is added to the Feedback table (along with fid, number of votes, isread, sid, and timestamp).<br>
</td>
</li></ul></tr></blockquote>

<blockquote><tr>
<blockquote><td>3</td>
<td>Check to make sure auto-complete functions correctly.</td>
<td>
</blockquote><ul><li>Do test 1.<br>
</li><li>Start typing question (“Why is the sky blue?”) into the input text field.<br>
</li><li>As you are typing, question (“Why is the sky blue?”) should appear below the input text field.<br>
</li><li>Select question from input text field.<br>
</li><li>Submit question.<br>
</td>
</li></ul><blockquote><td>
DB Verification: make sure your question is added to the Question table (along with qid, number of votes (which should now be incremented by 1), answered, sid, and timestamp) as well as the QuestionVotedOn table (which should have uid and qid)..</td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>4</td>
<td>Test all filter by options</td>
<td>
</blockquote><ul><li>Do test 1.<br>
</li><li>Do test 2.<br>
Filter by none:<br>
</li><li>Select "none" in the filter drop down list.<br>
Filter by All Questions:<br>
</li><li>Select "all questions" in the filter drop down list.<br>
Filter by Unanswered Questions:<br>
</li><li>Select "Unanswered" in the filter drop down list.<br>
Filter by Answered Questions:<br>
</li><li>Select "Answered" in the filter drop down list.<br>
</li><li>Go to DB's Questions table and change answered from 0 to 1.<br>
Filter by All Feedback:<br>
</li><li>Select "all feedback" in the filter drop down list.<br>
Filter by Unread Feedback:<br>
</li><li>Select "unread" in the filter drop down list.<br>
Filter by Read Feedback:<br>
</li><li>Select "read" in the filter drop down list.<br>
</li><li>Go to DB's Feedback table and change answered from 0 to 1.<br>
</td>
</li></ul><blockquote><td>
Filter by none:<br>
</blockquote><ul><li>Both submissions should appear in feed.<br>
Filter by All Questions:<br>
</li><li>Test 1's questions should appear in feed.<br>
Filter by Unanswered Questions:<br>
</li><li>Test 1's question should appear in feed.<br>
Filter by Answered Questions:<br>
</li><li>Test 1's question should appear in feed.<br>
Filter by All Feedback:<br>
</li><li>Test 2's feedback should appear in feed.<br>
Filter by Unread Feedback:<br>
</li><li>Test 2's feedback should appear in feed.<br>
Filter by Read Feedback:<br>
</li><li>Test 2's feedback should appear in feed.</td>
</li></ul></tr></blockquote>

<blockquote><tr>
<blockquote><td>5</td>
<td>Check to make sure sort by functions correctly.</td>
<td>
Sort by Newest:<br>
</blockquote><ul><li>Do test 1.<br>
</li><li>Do test 2.<br>
</li><li>Verify that newest is selected. If not, click "newest".</li></ul></blockquote>

Sort by Highest Priority:<br>
<ul><li>Do test 1.<br>
</li><li>Do test 2.<br>
</li><li>Do test 6.<br>
</li><li>Verify that highest priority is selected. If not, click "highest priority".</li></ul>

</td>
<blockquote><td>
Sort by Newest:<br>
</blockquote><ul><li>“Newest” appears in bold and black print and “highest priority” appears in maroon, unweighted print.<br>
</li><li>Test 2’s feedback submission should appear before (higher on the page) than test 1’s question.<br>
</li><li>DB Verification: Lookup timestamps of the question from test 1 and the feedback from test 2 in the Question and Feedback tables, respectively. Verify that the timestamp of test 1 is earlier than test 2.<br>
Sort by Highest Priority:<br>
</li><li>“Highest Priority” appears in bold and black print and “newest” appears in maroon, unweighted print.<br>
</li><li>Test 1’s question should appear before (higher on the page) than test 2’s feedback.<br>
</li><li>DB Verification: Lookup number of votes for question from test 1 and the feedback from test 2 in the Question and Feedback tables, respectively. Verify that the number of votes for test 1 is greater than test 2.</td></li></ul>

<blockquote></tr></blockquote>


<blockquote><tr>
<blockquote><td>6</td>
<td>Check to make sure submitting an already asked question via voting functions correctly.</td>
<td>
</blockquote><ul><li>Do test 1.<br>
</li><li>In the feed area, check the vote checkbox for the question (“Why is the sky blue?”).</td>
</li></ul><blockquote><td>
</blockquote><ul><li>Checkbox is selected.<br>
</li><li>DB Verification: make sure your question is added to the Question table (along with qid, number of votes (which should now be incremented by 1), answered, sid, and timestamp) as well as the QuestionVotedOn table (which should have uid and qid).</td>
</li></ul></tr>
</table>
<h3>Student Survey</h3>
<table cellpadding='5' width='1300' border='1'></blockquote>

<th width='5%'>Test #</th>
<th width='10%'>Test Description</th>
<th width='30%'>Test Plan</th><th width='30%'>Expected</th>
<blockquote><tr>
<blockquote><td>1</td>
<td>Check opening a survey functions properly.</td>
<td>Pre: You are logged in, have already joined a session, and the instructor has made a survey visible to students.<br>
</blockquote><ul><li>Survey should appear with a respond button.<br>
</li><li>Click respond button.<br>
</td>
</li></ul><blockquote><td>
</blockquote><ul><li>Response window should pop-up.</td>
</li></ul></tr></blockquote>

<blockquote><tr>
<blockquote><td>2</td>
<td>Check answering a free response survey functions properly.</td>
<td>
</blockquote><ul><li>Do test 1 where (where the preconditions hold with the additional constraint that the survey is of type Free Response).<br>
</li><li>Type response (“I think that…”) in input text field.<br>
</li><li>Submit response.</td>
</li></ul><blockquote><td>
</blockquote><ul><li>Response window should reflect a confirmation of submission message.<br>
</li><li>DB Verification: make sure your response is added to the Free Response table (along with sid).<br>
</td>
</li></ul></tr></blockquote>

<blockquote><tr>
<blockquote><td>3</td>
<td>Check answering a multiple choice survey functions properly.</td>
<td>
</blockquote><ul><li>Do test 1 where (where the preconditions hold with the additional constraint that the survey is of type Multiple Choice).<br>
</li><li>Select the first option.<br>
</li><li>Submit response.</td>
</li></ul><blockquote><td>
</blockquote><ul><li>Response window should reflect a confirmation of submission message.<br>
</li><li>DB Verification: make sure your response is added to the Multiple Choice table (along with sid).</td>
</li></ul></tr></blockquote>


</table>

<h3>Instructor Feed</h3>
<table cellpadding='5' width='1300' border='1'>

<th width='5%'>Test #</th>
<th width='10%'>Test Description</th>
<th width='30%'>Test Plan</th><th width='30%'>Expected</th>
<blockquote><tr>
<blockquote><td>1</td>
<td>Check to make sure marking question as answered functions properly.</td>
<td>Pre: You are logged in and have already opened a session, and feed has questions that have been manually inserted into the DB (i.e. Question1) "Why do Earth's plates move?", Question2) "Why was Abraham Lincoln so popular?").<br>
</blockquote><ul><li>Click on the "Answered/Read?" checkbox for the first question.<br>
</td>
</li></ul><blockquote><td>
</blockquote><ul><li>Checkbox should appear checked.<br>
</li><li>DB Verification: Make sure the question marked has answered==1 in the Question table.</td>
</li></ul></tr></blockquote>

<blockquote><tr>
<blockquote><td>2</td>
<td>Check to make sure sorting functions properly.</td>
<td>Pre: You are logged in and have already opened a session, and feed has questions that have been manually inserted into the DB (i.e. Question1) "Why do Earth's plates move?", Question2) "Why was Abraham Lincoln so popular?").<br>
Sort by Newest:<br>
</blockquote><ul><li>Click on "Newest" (if not already selected).<br>
Sort by Highest Priority:<br>
</li><li>Click on "Highest Priority" (if not already selected).<br>
</td>
</li></ul><blockquote><td>
Sort by Newest:<br>
</blockquote><ul><li>“Newest” appears in bold and black print and “highest priority” appears in maroon, unweighted print.<br>
</li><li>Test 2’s feedback submission should appear before (higher on the page) than test 1’s question.<br>
</li><li>DB Verification: Lookup timestamps of the questions in the Questions table. Verify that the timestamp of test 1 is earlier than test 2.<br>
Sort by Highest Priority:<br>
</li><li>“Highest Priority” appears in bold and black print and “newest” appears in maroon, unweighted print.<br>
</li><li>Test 1’s question should appear before (higher on the page) than test 2’s feedback.<br>
</li><li>DB Verification: Lookup number of votes for the questions in the Questions table. Verify that the number of votes for test 1 is greater than test 2.</td>
</li></ul></tr></blockquote>

<tr>
<blockquote><td>3</td>
<td>Check to make sure voting functions properly.</td>
<td>Pre: You are logged in and have already opened a session, and feed has questions that have been manually inserted into the DB (i.e. Question1) "Why do Earth's plates move?", Question2) "Why was Abraham Lincoln so popular?").<br>
</blockquote><ul><li>Go into DB's Question table to find question 1 and increment its count from 1 to 2.<br>
</td>
</li></ul><blockquote><td>
</blockquote><ul><li>Vote count should go from showing "1" to "2".</td>
</li></ul><blockquote></tr>
</table></blockquote>

<h3>Instructor Survey</h3>
<table cellpadding='5' width='1300' border='1'>

<th width='5%'>Test #</th>
<th width='10%'>Test Description</th>
<th width='30%'>Test Plan</th><th width='30%'>Expected</th>
<blockquote><tr>
<blockquote><td>1</td>
<td>Check to make sure creating a survey functions correctly.</td>
<td>Creating a Free Response Survey:<br>
</blockquote><ul><li>Pre: You are logged in and have opened a session.<br>
</li><li>In the input text field, type a question (“What is the meaning to life?”).<br>
</li><li>Select Create button.<br>
Creating a Multiple Choice Survey:<br>
</li><li>Pre: You are logged in and have opened a session.<br>
</li><li>In the first input text field, write the main question. In the text fields that follow, put an option per input text field.<br>
</li><li>Select Create button.<br>
</td>
</li></ul><blockquote><td>Creating a Free Response Survey:<br>
</blockquote><ul><li>In the Survey area, the free response should appear.<br>
</li><li>DB Verification: Make sure the question appears in the Free Response table (along with sid) and the Survey table (with session id and whether or not it is open).<br>
Creating a Multiple Choice Survey:<br>
</li><li>In the Survey area, the multiple choices should appear.</td>
</li></ul></tr></blockquote>

<blockquote><tr>
<blockquote><td>2</td>
<td>Check to make sure starting a survey functions correctly.</td>
<td>
</blockquote><ul><li>Do test 1 with free response question ("What is the meaning to life?").<br>
</li><li>Click the "Start Survey" button for this question.</td>
</li></ul><blockquote><td>
</blockquote><ul><li>"Start Survey" button disappears and is replaced with "Stop Survey".<br>
</li><li>DB Verification: make sure your question is in the Survey table with open==1 (along with sid and sessionid).</td>
</li></ul></tr></blockquote>

<blockquote><tr>
<blockquote><td>3</td>
<td>Check to make sure stopping a survey functions correctly.</td>
<td>
</blockquote><ul><li>Do test 2.<br>
</li><li>Click the "Stop Survey" button for this question.</td>
</li></ul><blockquote><td>
</blockquote><ul><li>"Stop Survey" button disappears and is replaced with "Start Survey".<br>
</li><li>DB Verification: make sure your question is in the Survey table with open==0 (along with sid and sessionid).</td>
</li></ul></tr></blockquote>

<blockquote><tr>
<blockquote><td>4</td>
<td>Check to make sure viewing survey results functions correctly.</td>
<td>
</blockquote><ul><li>Do test 3.<br>
</li><li>Click the "View Results" button for this question.</td>
</li></ul><blockquote><td>
</blockquote><ul><li>A popup window with the results of the survey is displayed.<br>
</td>
</li></ul></tr></blockquote>

</table>


<h3>Instructor Settings</h3>
<ul><li>Login/Logout Tests must pass<br>
<table cellpadding='5' width='1300' border='1'>
<th width='5%'>Test #</th>
<th width='10%'>Test Description</th>
<th width='30%'>Test Plan</th><th width='30%'>Expected</th></li></ul>

<blockquote><tr>
<blockquote><td>1</td>
<td>Makes sure adding a course functions properly.</td>
<td>
<ul><li>Add a class by submitting CSE403 as course and cs@cs.com as mailing list address.<br>
</li></ul></td>
<td>
<ul><li>Course name should appear with "Open", "Delete", add a student input text field and add student button.<br>
</li><li>DB Verification: Should see Course table with values CSE403, cs@cs.com, Teaches with uid and cid values.<br>
</li></ul></td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>2</td>
<td>Makes sure opening a session functions properly.</td>
<td>
</blockquote><ul><li>Do test 1.<br>
</li><li>Click Open button for that course<br>
</li></ul><blockquote></td>
<td>
</blockquote><ul><li>The Open button should change to a Close button.<br>
</li><li>DB verification: Check that the Session table has row for this course with open==1.<br>
</li><li>Verify that the session id you see in the table is the same as the one in your cookies<br>
</li></ul><blockquote></td>
</blockquote></tr></blockquote>


<blockquote><tr>
<blockquote><td>3</td>
<td>Makes sure closing a session functions properly.</td>
<td>
</blockquote><ul><li>Do Test 2.<br>
</li><li>Click Close button for that course<br>
</li></ul><blockquote></td>
<td>
</blockquote><ul><li>Close button should appear change to Open button<br>
</li><li>DB verification: That row is deleted.<br>
</li><li>sid should be removed from cookies<br>
</li></ul><blockquote></td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>4</td>
<td>Makes sure deleting a course functions properly.</td>
<td>
</blockquote><ul><li>Do Test 1 (after verifying expected for test 1, do test 2)<br>
</li><li>Click delete button for that course<br>
</li></ul><blockquote></td>
<td>
</blockquote><ul><li>Course deleted should no longer appear in Courses section.<br>
</li></ul><blockquote></td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>5</td>
<td>Adding a student.</td>
<td>
</blockquote><ul><li>Do Test 1.<br>
</li><li>Add student's email address.<br>
</li><li>Click Add Student button.<br>
</li></ul><blockquote></td>
<td>
</blockquote><ul><li>DB verification: user's uid and course information should be added to the Attends table.<br>
</li></ul><blockquote></td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>6</td>
<td>Checking get_courses (bc injects varied HTML into page).</td>
<td> Pre: Instructor has class that he/she teaches and will be displayed. Otherwise, if they don't teach a class, nothing will be displayed until they add a course.<br>
</blockquote><ul><li>1) Instructor: Adds student to one of his/her course.<br>
</li><li>2) Instructor: Instructor opens session.<br>
</li><li>3) Student: Joins open session.<br>
</li><li>4) Student: Quits open session.<br>
</li><li>5) Teacher: Closes session.<br>
</li><li>6) Student: Removes course.<br>
</li><li>7) Teacher: Deletes course.<br>
</li></ul><blockquote></td>
<td>
</blockquote><ul><li>1) Instructor: Should see popup window with student add confirmation. Student: Should see course that they have been added to in their settings with a remove button (because the course's session is currently closed).<br>
</li><li>2)Student: Join button appears next to that course.<br>
</li><li>3)Student: Join button disappears and is replaced by the Quit button next to that course.<br>
</li><li>4)Student: Quit button disappears and is replaced by Join button.<br>
</li><li>5)Student: Join or Quit button disappears. Teacher: Close? button disappears and is replaced by Open? button.<br>
</li><li>6) Student: course that they selected to remove should no longer be visible.<br>
</li><li>7) Teacher: course that they selected to delete should no longer be visible.</li></ul></blockquote>

<blockquote></td>
</blockquote><blockquote></tr>
</table></blockquote>

<h3>Instructor Timeline</h3>
<table cellpadding='5' width='1300' border='1'>

<th width='5%'>Test #</th>
<th width='10%'>Test Description</th>
<th width='30%'>Test Plan</th><th width='30%'>Expected</th>
<blockquote><tr>
<blockquote><td>1</td>
<td>Check to make sure timeline displays correctly.</td>
<td>Pre: You are logged in and have opened a session.<br>
</blockquote><ul><li>Insert questions into the Questions table in database.<br>
</td>
</li></ul><blockquote><td>
</blockquote><ul><li>On the graph, you should see line graph increase depending on number of submissions.<br>
</li><li>DB Verification:  Make sure the number of questions and their timestamps coincide with the number of submissions in the Questions and Feedback tables.</td>
</li></ul></tr>
</table></blockquote>

<h1>Backend Unit Tests</h1>
Results for the backend unit tests can be found on our <a href='http://cubist.cs.washington.edu:8080'>Hudson</a>.<br>
<table cellpadding='5' width='1300' border='1'>

<th width='5%'>Test #</th>
<th width='20%'>Path</th>
<th width='50%'>Test Description</th>
<blockquote><tr>
<blockquote><td>test-add-student</td>
<td>${Incognito Root}/testing/phpunit/test-add-student.php</td>
<td>Tests the add student php script</td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>test-answer-question</td>
<td>${Incognito Root}/testing/phpunit/test-answer-question.php</td>
<td>Tests the answer-question script and the ability to update the database with new feedback and questions. </td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>test-courses</td>
<td>${Incognito Root}/testing/phpunit/test-courses.php</td>
<td>Tests all of the functionality associated with courses. So we have the ability of the instructor to add and delete courses. In addition, we check the ability to open, close, and join sessions on courses </td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>test-autocomplete</td>
<td>${Incognito Root}/testing/phpunit/test-autocomplete.php</td>
<td>Tests question and feedback retrieval for the autocomplete widgets on the student home and feed page. It ensures that only submissions associated with the current session are retrieved, and also verifies that if Submit As Question is selected, only questions are retrieved for suggestions, and if Submit As Feedback is selected, only feedback is retrieved.</td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>test-instructorfeed</td>
<td>${Incognito Root}/testing/phpunit/test-instructorfeed.php</td>
<td>Tests question and feedback retrieval for the instructor's feed. For each filtering option (None, All Questions, All Feedback, Answered/Unanswered Questions, Read/Unread Feedback), each sorting option (None, Newest, Priority) is tested. Verifies that submissions with the proper SID are retrieved, that the retrieved content matches the filter specified, and that the order of the submissions is appropriate given the sorting parameter.</td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>test-studentfeed</td>
<td>${Incognito Root}/testing/phpunit/test-studentfeed.php</td>
<td>Tests question and feedback retrieval for the student's feed. The tests performed are similar to those used to test the instructor feed. However, this test suite includes additional tests to verify that the backend correctly determines whether a given student has voted for a given submission.</td>
</blockquote></tr></blockquote>

<blockquote><tr>
<blockquote><td>test-submit-question</td>
<td>${Incognito Root}/testing/phpunit/test-submit-question.php</td>
<td>Tests question and feedback submission to the database. It independently tests four different cases: submitting a new question, submitting a new feedback, submitting an existing question, and submitting an existing feedback. For the latter two cases, this suite tests voting functionality as well, since attempting to submit an existing question/feedback will cast a vote for that submission. After testing voting for an existing submission, this suite also tests that the database is unchanged if the same submission from the same UID is attempted again.</td>
</tr></blockquote></blockquote>

<blockquote><tr>
<blockquote><td>test-submit-vote</td>
<td>${Incognito Root}/testing/phpunit/test-submit-vote.php</td>
<td>Tests voting from the student feed checkboxes. In addition to verifying that the database is updated correctly when a student submits a vote, it also checks that the student's vote is correctly removed when the corresponding checkbox is unchecked.</td>
</tr></blockquote></blockquote>

<td>test-survey</td>
<blockquote><td>${Incognito Root}/testing/phpunit/test-survey.php</td>
<td>Tests submitting surveys - free response and multiple choice. In addition on the instructor side, it tests the start and stop survey features. On the student side, it tests the answering of surveys - multiple choice and free response</td>
</table>