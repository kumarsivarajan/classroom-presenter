(Updated 6/1)

# Use Cases (Beta Release) #
For Beta Release we decided to add two more unit tests.
## Use Case #6 ##
Actors: A student <br>
Goal: Join a session that is open <br>
Precondition: Student is logged in and already added to course as a participant.<br>
Trigger: Class has started and student wants access to the class sessions feed.<br>
Success Condition: Student is able to see the class sessions feed.<br>

Summary:<br>
<ol><li>Student goes to the "Your Courses" page.<br>
</li><li>Student sees a "Join Session" button next to the class that is in session.<br>
</li><li>Student clicks "Join Session." The Join button is replaced by "Quit Session," indicating that the session was joined successfully.<br>
</li><li>Student navigates to the Feed Page and see the feed.</li></ol>

<h2>Use Case #7</h2>

Actors: An instructor<br>
Goal: Open a session for class<br>
Precondition: Instructor is logged in and the course is already created and in their course list.<br>
Trigger: Class is starting and instructor wants to open up the feed.<br>
Success Condition: Session is opened and students are able to join.<br>

Summary:<br>
<ol><li>Instructor goes to "Your Courses" page.<br>
</li><li>Instructor clicks the "Start Session" button next to the course.<br>
</li><li>Instructor navigates to the Feed page and sees activity.</li></ol>

<hr />
<h1>Use Cases (SRS)</h1>
<h2>Use Case #1</h2>
Actors: A student, an instructor<br>
Goal: Submit a question for the instructor to answer. <br>
Precondition: Student is logged in to Incognito.<br>
Trigger: Student thinks of a question for the instructor during class. <br>
Success Condition: Student is able to submit a question to the instructor. <br>

Summary:<br>
<br>
<ol><li>Student loads the Incognito question submission page.<br>
</li><li>Student types out a question, and it does not appear in the auto-complete portion of the window.<br>
</li><li>Student submits the question.<br>
</li><li>The question is added to Incognito’s live question feed.</li></ol>

<ul><li>Alternative: Student didn’t bring a laptop<br>
<ul><li>At step 1, the student loads the mobile version of the Incognito website (stretch feature).<br>
</li></ul></li><li>Alternative: Question has been asked already<br>
<ul><li>At step 2, the student starts typing in a question and notices that the question has already been asked through the auto-complete box.<br>
</li><li>The student selects the auto-complete portion of the window for the desired question.<br>
Incognito registers a vote for the selected question.<br>
</li></ul></li><li>Alternative: Student has been banned due to inappropriate behavior (Failure Condition)(feature cut)<br>
<ul><li>At step 2, Incognito notifies the student that he or she is no longer allowed to submit questions.<br>
</li><li>The student will be restricted to viewing content until the instructor restores his or her privileges.</li></ul></li></ul>

<h2>Use Case #2</h2>
Actor: Instructor<br>
Goal: Answer a question<br>
Precondition: Instructor is logged in to Incognito<br>
Trigger: Students have submitted questions to Incognito<br>
Success Condition: Question is answered and properly marked<br>

Summary:<br>
<ol><li>Instructor pauses the lecture to answer a question<br>
</li><li>Instructor opens the question feed and views questions<br>
</li><li>Instructor selects a question to answer<br>
</li><li>Instructor answers the question, and flags it as answered</li></ol>

<ul><li>Alternative: Instructor does not notice activity, or chooses not to answer questions immediately<br>
<ul><li>At step 1, the instructor checks Incognito for questions during a question-answer period in the lecture.<br>
</li></ul></li><li>Alternative: Question’s status is not updated properly (Failure Condition)<br>
<ul><li>At step 4, the instructor forgets to mark an answered question as answered.<br>
</li><li>The system will not notify the instructor, but the instructor can go back and correct the status of the question at a later time.</li></ul></li></ul>

<h2>Use Case #3</h2>
Actors: Instructor, students <br>
Goal: Start a poll or discussion <br>
Trigger: Instructor wants to make sure students are keeping up with the lecture. <br>
Precondition: Instructor is logged in to Incognito <br>
Success Condition: Instructor is able to see the results of the poll or discussion <br>

Summary:<br>
<ol><li>Instructor goes to Incognito’s survey creation page.<br>
</li><li>The instructor starts an already created survey.<br>
</li><li>Students receive a notification for the survey, and respond to it.<br>
</li><li>From the results of the survey, the instructor can decide to review the previous material, or continue with the lecture.</li></ol>

<ul><li>Alternative:<br>
<ul><li>At step 2, student decides to respond to the survey. Other students will have responded, otherwise, the lecturer will reiterate the usefulness of this application, and how it supplements to the student’s education.</li></ul></li></ul>


<h2>Use Case #4</h2>
NOTE: No longer valid - the video tutorial feature has been cut due to time constraints.<br>
<br>
Actors: A student<br>
Goal: Student wants to quickly learn about the application<br>
Trigger: Instructor gives student log in credentials for the class<br>
Precondition: Student has already been assigned log in credentials<br>
Success Condition: Student loads and watches the tutorial<br>

Summary:<br>
<ol><li>Student goes to Incognito’s login page.<br>
</li><li>Student loads the tutorial video and begins watching.<br>
</li><li>Student is really interested in the product and logs in.<br>
</li><li>Student explores the site.</li></ol>

<ul><li>Alternative: Video does not interest student at all<br>
<ul><li>At step 4, the student may not have found the video interesting at all.<br>
</li><li>The student does visits the website and clicks the help page.</li></ul></li></ul>

<ul><li>Alternative: Incorrect credentials (Failure Condition)<br>
<ul><li>At step 4, the student is unable to log in.<br>
</li><li>The system keeps asking for valid credentials.</li></ul></li></ul>

(Updated 6/1)<br>
<br>
<h2>Use Case #5</h2>
NOTE: Stretch feature that has not been implemented.<br>
<br>
Actors: Instructor<br>
Goal: Instructor wants to load a previous session to examine/answer past questions. <br>
Preconditions: The instructor has held previous class sessions during which students have submitted questions. <br>
Trigger: The instructor visits the Incognito website. <br>
Success Condition: The instructor is able to find questions from previous class sessions and able to correctly mark the questions as answered/unanswered as he or she examines the questions. <br>

Summary:<br>
<ol><li>The instructor is on the history tab of the web page.<br>
</li><li>The instructor chooses a start and end date and the corresponding sessions load.<br>
</li><li>The instructor views answered/unanswered questions from the session.<br>
</li><li>The instructor selects a question and mark the question as answered</li></ol>


<ul><li>Alternative: Instructor incorrectly marks a question (Failure Condition)<br>
<ul><li>At step 4, the instructor marks an unanswered question as answered, or does not mark an answered question as answered.<br>
</li><li>Incognito will not check for this kind of error, but if the instructor notices such a mistake, he or she can correct the error by marking the question as answered or unanswered as appropriate.