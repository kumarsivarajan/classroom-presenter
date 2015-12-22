# Release Information #
## What works? ##
|Functionality | Description | Front End | Back End |
|:-------------|:------------|:----------|:---------|
|Alias changing | User is able to change their alias and have it reflected throughout the site. |Chricua/Schwer | Verified <br>(<a href='http://code.google.com/p/classroom-presenter/issues/detail?id=8'>Issue filed</a>) <table><thead><th> Yes      </th></thead><tbody>
<tr><td>Student Home: Auto-complete</td><td> If the question/feedback is already asked, it will be auto-completed below. If a question/feedback is not asked it will be added to the auto completion set of questions/feedback.  </td><td> Mcmk/Furby </td><td> Verified (<a href='http://code.google.com/p/classroom-presenter/issues/detail?id=9'>Issue Filed</a>) </td><td> Yes      </td></tr>
<tr><td>Student Feed: Auto-complete </td><td> If the question/feedback is already asked, it will be auto-completed below. If a question/feedback is not asked it will be added to the auto completion set of questions/feedback.  </td><td> Mcmk/Furby </td><td> Verified (<a href='http://code.google.com/p/classroom-presenter/issues/detail?id=9'>Issue Filed</a>) </td><td> Yes      </td></tr>
<tr><td>Submit Q's    </td><td> Submits Question to the a session that is open. This question will show up in the feed of all students participating and a the instructor that is moderating. </td><td> Mcmk/Furby </td><td> Verified (<a href='http://code.google.com/p/classroom-presenter/issues/detail?id=10'>Issue Filed</a>) </td><td>Yes       </td></tr>
<tr><td>Submit F's    </td><td> Submits feedback to the a session that is open. This feedback will show up in the feed of all students participating and a the instructor that is moderating.  </td><td> Mcmk/Furby  </td><td>Verified 5/16  </td><td> No       </td></tr>
<tr><td>Sorting & Filtering Feed </td><td> Allows for sorting and filtering the questions and feedback in the feed </td><td> Mcmk/Furby </td><td> Verified 5/16 </td><td> No       </td></tr>
<tr><td>Deleting and Creating Courses (instr)</td><td> Allows an instructor to delete and create courses. Once deleted, all students enrolled with that course will be removed from that course. All sessions and related data will also be removed. When a new course is created, instructors will then be allowed to add students to that course. </td><td> Chriacua/Schwer </td><td> Verified 5/16 </td><td> Yes      </td></tr>
<tr><td>Get Courses   </td><td> Gets the list of courses that the instructor is teaching or the student is enrolled for. </td><td> Chriacua/Schwer </td><td> Verified 5/16</td><td> Yes      </td></tr>
<tr><td>Adding students to a course </td><td> Adds a student to course. They will then be able to view if the session is open or closed. If opened, they will have the option to join.  </td><td> Chriacua/Schwer </td><td> Verified 5/16 </td><td> Yes      </td></tr>
<tr><td>Ending and Starting session </td><td> Allows the instructor to open/end the feed for a class session. Students enrolled in that course will see that a session is open and will have the option to join. </td><td> Chriacua/Schwer </td><td> Verified 5/16 </td><td> Yes      </td></tr>
<tr><td>Exiting and joining sessions </td><td> Allows the student to join/leave an open session. Students can join an open session or leave a session they are currently in. </td><td> Chriacua/Schwer </td><td> Verified 5/16 </td><td>Yes       </td></tr>
<tr><td>Remove courses (student)</td><td> Allows the student to remove a course from their list of enrolled courses. After removal they will not be able join open sessions of this course. If they want back in they need to ask the instructor to manually add them back in. </td><td> Schwer/Chriacua </td><td> Verified 5/16 </td><td> Yes      </td></tr>
<tr><td>Get Feed      </td><td> Displays the questions and feedback in the Instructor & Student Feed </td><td>  Mcmk/ Furby  </td><td> Verified 5/16</td><td>Yes       </td></tr>
<h3>Which use cases can be done?</h3>
At this point <a href='http://code.google.com/p/classroom-presenter/wiki/UseCases#Use_Case_#7'>Use Case 7</a>,  <a href='http://code.google.com/p/classroom-presenter/wiki/UseCases#Use_Case_#6'>Use Case 6</a>, <a href='http://code.google.com/p/classroom-presenter/wiki/UseCases#Use_Case_#1'>Use Case 1</a> can be done. For instructions on how to perform this tasks or a flow chart of what can be done please see UserDocumentation.</tbody></table>


<h3>Testing</h3>
<ul><li>Existing Unit Tests<br>
<ul><li>Tests have been added for some backend php scripts validating the storing and pulling of data.<br>
</li><li>Tests can be found in testing/phpunit/<br>
</li></ul></li><li>Test First Style:<br>
<ul><li>File: testing/phpunit/testLogout.php<br>
</li><li>Has been added to build.xml for build test but is not run on Hudson yet.</li></ul></li></ul>

<ul><li>System Tests:<br>
<ul><li>At this point most of our system tests are done manually by:<br>
<ul><li>Interacting with the website<br>
</li><li>Checking for the intended behavior on the front end<br>
</li><li>Checking to make sure that the DB has been updated.<br>
</li></ul></li><li>Since we decided not to use technologies such a Selenium to do integration testing. Therefore we have decided to write test plans with how to manually do system tests. These plans will be documented <a href='http://code.google.com/p/classroom-presenter/wiki/TestPlans#Manual_Test_Plans_for_Validation_Tests'>here</a>.</li></ul></li></ul>

<h3>Bug Tracking</h3>
Please see the <a href='http://code.google.com/p/classroom-presenter/issues/list'>Issue Tracker.</a>

<h3>Design Changes</h3>
<table><thead><th>Design </th><th> Previously </th><th> At Beta Release </th></thead><tbody>
<tr><td>Student joining a course.</td><td> We wanted the instructors to be able to generate one time add codes for students in the course and then have students specify which course they wanted to join and the add code in order to join a class.</td><td> We have decided that once a instructor creates a course, there will be a form where the instructor can manually insert a list of students.</td></tr>
<tr><td>The way an Instructor adds students to a course.</td><td> We wanted to use the mailing list to send out add codes to the students.</td><td> The instructor will provide a list of net id's separated by a space. This makes it harder for the student to pass out add codes and allow for intruders. Although it adds some burden to the instructor we plan to make it easier in later releases by allowing for other student list formats </td></tr>
<tr><td>The way a session is handled. </td><td> We wanted to make it so that once an instructor starts a session all students will be added to the session automatically.</td><td> Once the instructor starts a session, in the course list on the student side it will show that a course has a session open. The student will then manually decide to join or not. </td></tr>
<tr><td>Login Authentication</td><td> We wanted users to be able to login using the UW authentication system</td><td>Cubist does not support UW NetID verification, therefore we are using CSE NetID </td></tr></tbody></table>

<h3>Design Pattern/Principle Usage</h3>
<ul><li>Abstraction<br>
</li></ul><blockquote>In particular the back end team did a lot of hiding the information from the front end. They did this hiding by just providing to the front end a set of front end functions. In result the front end did not have to worry about any over the wire communications or trying to get the JavaScript to communicate to the php in the backend.</blockquote>

<ul><li>Subclassing<br>
</li></ul><blockquote>We incorporated subclassing with users, two different subclasses students and instructors and survey which has to different subclasses mc and fr. The subclassing from the users, allows the backend to distinguish between a student and instructor and also keep track of what features they each have. Keep track of differences in behaviour and state.</blockquote>

<h3>Version Control</h3>
Amanda (PM) : Although it may seem that most of our check-ins were done towards the end of the Beta Release, I would like to explain that our group was having significant issues with organization and modularity. I was able to talk to Professor Ernst at the end of last week (Thursday before the midterm) and was directed to re-evaluate our architecture. Therefore our team was on a bit of a stand still while we tried to work on our group organization and software architecture. Things were straightened out by Monday and work was made clear and delegated to the Devs. Therefore this is one reason why most of our check-ins are made later in the Release cycle. We are hoping for your understanding as although at first we might have fallen behind we were able to learn from our mistakes and put ourselves back on track.<br>
<br>
<br>
<h1>Updated Living Docs</h1>
Many new docs have been added and updated throughout the course according to the need.<br>
<br>
The changes discussed here are targeted to just changes made to the SRS and SDS to reflect all the changes that have been made up to the Beta Release. Other changes are hard to track and document since updates are made constantly.<br>
<br>
If you want a detailed page of changes made to the wiki please visit this <a href='http://code.google.com/p/classroom-presenter/updates/list'>link</a>

<table><thead><th> Doc </th><th> Description </th></thead><tbody>
<tr><td> <a href='http://code.google.com/p/classroom-presenter/wiki/ProductFeatures?ts=1305272159&updated=ProductFeatures#Features_(Beta_Release)'>SRS-Features</a> </td><td> Updated primary features and stretch features according to what is actually needed and focusing on the in class experience.</td></tr>
<tr><td><a href='http://code.google.com/p/classroom-presenter/wiki/SystemReqSpec?ts=1305274208&updated=SystemReqSpec'>SRS</a> </td><td> Updated Software Tools Set and Group Dynamics since we have shifted some technologies and changed our group dynamics to match the technolgy abilities of the each dev. </td></tr>
<tr><td><a href='http://code.google.com/p/classroom-presenter/wiki/DevelopmentSchedule'>Development Schedule</a> </td><td>Update the Schedule to reflect our changed feature priorities. We also accounted for midterm week where we fell somewhat behind due to midterms and a weak architecture. </td></tr>
<tr><td><a href='http://code.google.com/p/classroom-presenter/wiki/RiskManagement?ts=1305274871&updated=RiskManagement'>Risks</a> </td><td>We have been closely assessing the risks that we brought up earlier and have update the page with how we have addressed them at the time of Beta Release. </td></tr>
<tr><td><a href='http://code.google.com/p/classroom-presenter/wiki/UseCases?ts=1305276336&updated=UseCases'>Use Cases</a> </td><td>Extra Use cases have been added to reflect the basic functionality that needs to be in place for anything else to work or make sense. </td></tr>
<tr><td><a href='http://code.google.com/p/classroom-presenter/wiki/UserInterfaceDocuments#Beta_Release_Interface'>UI Diagrams</a></td><td> Current UI Screenshots added with functionality caption. UI will still be evolving as we proceed. </td></tr>
<tr><td><a href='http://code.google.com/p/classroom-presenter/wiki/HomePage?ts=1305278025&updated=HomePage#Team_Full_House'>Roles</a> </td><td>Roles have been adjusted accordingly. Roles are ordered in decreasing order. </td></tr>
<tr><td><a href='http://code.google.com/p/classroom-presenter/wiki/UserDocumentation?ts=1305279321&updated=UserDocumentation#Flow_Chart'>User Documentation</a></td><td> Added user flow chart and updated how-to steps.</td></tr>
<tr><td><a href='http://code.google.com/p/classroom-presenter/wiki/BuildInstructions#Build_Instructions'>Build Document</a></td><td>Updated the build document to be more clear using feedback from TA's.</td></tr>
<tr><td><a href='http://code.google.com/p/classroom-presenter/wiki/ZeroFeatureRelease'>ZFR Doc</a> </td><td>Updated pushing to production procedure. Not using Hudson to to push live at Beta release.</td></tr>
<tr><td><a href='http://code.google.com/p/classroom-presenter/wiki/SystemArchitecture?ts=1305281596&updated=SystemArchitecture'>Architecture</a> </td><td> Added new Architecture. The architecture was redesigned due to our weak initial design. The diagram is a visual view of the features to be implemented Beta Release but you can also see the documentation for it in the <a href='DevelopmentSchedule.md'>DevelopmentSchedule</a></td></tr>
<tr><td><a href='http://code.google.com/p/classroom-presenter/wiki/Api'>API</a></td><td> Functions and their signatures for Beta Release Features</td></tr>