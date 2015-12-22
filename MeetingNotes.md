# Meeting 5/24 #
mcmk
  * MC (still integrating)
  * FR done

furbs
  * testing
  * help page (in progress)

Schwer
  * testing
  * FCR BE done

Chriacua
  * timeline
  * bugs
  * manual testing plan

shenama
  * docs
  * manual testing plan

# Meeting 5/12 #

Addressed function signatures ([see notes](http://code.google.com/p/classroom-presenter/wiki/Api))

Discussed Testing Framework ([see notes](http://code.google.com/p/classroom-presenter/wiki/RunningTests))

# Meeting 5/11 #
[updated architecture diagram with delegation and updates](http://code.google.com/p/classroom-presenter/downloads/detail?name=Beta%20Release%20Plans_Update1.pdf&can=2&q=#makechanges)

**Tasks at hand:**

@Mike @Chris
  * Send me whatever testing you have so that I can get you feedback from myself and Ernst. It's better to know what is good and bad before implementing all the tests.

@Mike @Christopher
  * Mike is going to talk with Christopher about what format they want displayfeed to be. Specifically what params and returns.

@Chris @Robert
  * Talk about what format they want getCourses to be. Specifically what params and returns.

@All
  * Issues: please create new issues in the issue tracker as they appear and get fixed.

**Issues raised:**
  * Design patterns: backend abstraction & frontend wrapper
  * cookie will have: user & session id

**Reminders**
  * small and incremental pushes!
  * testing is important, update populate sql scripts with dummy data u need!

**Meeting goals**

- Each member will update the rest on what exactly they have done (make sure to correspond to the architecture so that I can document this), what is left to do, do-ability and concerns. This needs to be clear and concise, please don't make me put you on the spot to say more. Also, at the end, other members can critique and make suggestions.

- 1 minute for each person to talk about testing on their parts, what has been written, what are they planning to write, and concerns.

- Bug tracking. Please note that we are all responsible to submit one issue to the issue tracking device on google code. (link) We will talk about this task and how we plan to approach it. These bug can be ones that are already fixed or still an issue.

- Design pattern and principle. One thing that we may all need to keep in mind while implementing is that we are required to use at least two design patterns/principles in our implementation. Let's discuss this.

- Are there any other issues the devs would like to raise?

- Flesh out specifically what return values and parameters are needed.

- For logging in: cookie and what values do we feel are needed globally in the coookie

- @Chris Discuss with chris what the heading will look like for the open close thing. **------> next release**

- @Chris clickable logo  **------> next release**


# Meeting 5/10 #

_Goals_

  * Architecture restructure
  * Answer Concerns
  * Prioritize Task
  * Delegate Tasks
  * Set Deadlines
  * Goodbye!

_Concerns_

  * Order/Filter: BE or FE? Which is faster?
    * BE
  * For parameters on calls, BE needs to specify to FE what they need for DB insertion.
  * How do we know to update page stuff?
    * Time Interval

_Delegation_
[PDF](https://docs.google.com/viewer?a=v&pid=explorer&chrome=true&srcid=0Bzd4J1lrkW1zNzdjNTI5N2MtOTcwZi00MTk5LTgyY2EtYWQ2NDBkZjZkMGI4&hl=en)


# Meeting 5/3 && 5/5 #

Tasks to complete: Question and Answers Managment

Chris:  Auto-Complete-UI Side && UI

Amanda: Auto-Complete-Backend, PHP scripts, MYUW Authentication

Mike: Instructor side updating question, answered/unanswered field.

Robert: Worked on lookup\_question.php

Furby:  Worked on submit\_question.php

# Meeting 4/22 #

_Testing_

Hudson will build and push to deployment on Google app engine.

Testing unit tests and system tests(QA, run tasks through the all layers and then validate the data)

Selenium to automate qa testing.


# Meeting 4/21 #

**Main Achievement**: Merging class diagrams.<br>
<h3>Tasks</h3>
Everyone: <b>Please submit your edited diagrams to Amanda for merging</b><br>
<h2><i>Christopher: Investigate YUI auto-complete</i></h2>

<h3>Architecture Document</h3>
Database Diagram<br>
<b>Responsible: Chris</b>

<blockquote>The System Architecture document provides a detailed definition of the system’s software components. It identifies the <b>major modules</b> and their functionality, and the <b>interfaces</b> between modules, required to implement the system. It should address the design of the system from the customer's viewpoint, as well as that of the developer or administrator.<br>
<b>Responsible: GUYS</b></blockquote>

<blockquote>For two design decisions for which you seriously considered an alternative, briefly describe that alternative. Discuss its pros and cons and why you chose the design you did.<br>
</blockquote><ul><li>Decision 1: We decided MVC vs BB, Web Server, Pipeline.<br>
</li><li>Decision 2: We chose coordinated vs layered<br>
<b>Responsible: GIRLS</b> <i>done</i></li></ul>

<blockquote>If there are particular assumptions in your design, identify them.<br>
</blockquote><ul><li>Assume they have mailing list<br>
</li><li>Assume they have gmail accounts<br>
</li><li>Assume they bring laptops<br>
<b>Responsible: GIRLS</b> <i>done</i></li></ul>

Accompanying one or both of the sequence diagrams should be a pseudo-code description of the same algorithm.<br>
<ul><li>Use Case 1: Chris <i>done</i>
</li><li>Use Case 2: Christopher<br>
</li><li>Use Case 3: Amanda</li></ul>

<h3>Process Document</h3>
1. Risk assessment<br>
<b>Responsible: Christopher</b>

2. Project Schedule<br>
<b>Responsible: BE: Mike FE: Cris</b>

3. Team structure<br>
<b>Responsible: Mike</b>

4. Test plan<br>
<b>Responsible: Amanda, Chris</b> <i>done</i>

5. Documentation Plan<br>
<b>Responsible: Robert</b>

6. Coding Style<br>
<b>Responsible: Robert</b> <i>done</i>

PPT SLIDES:<br>
<br>
UI Major Features: <b>Chris</b><br>
Intro & Novelty: <b>Amanda</b><br>
Architecture: <b>Mike & Schwer</b><br>

<h1>Meeting 4/20</h1>
<b>Main Achievement:</b> Finished sequence diagrams.<br>
<br>
<b>Work Load Assignments:</b><br>
Backend:<br>
<br>
QuestionController  (SCHWER)<br>
SurveyController  (SCHWER)<br>
HistoryController  (SCHWER)<br>

Objects:<br>
<br>
Student   (MCMK)<br>
Inst   (MCMK)<br>
Course   (MCMK)<br>
Session   (SHENAMA)<br>
Survey   (SHENAMA)<br>
<ul><li>Multiple Choice   (SHENAMA)<br>
</li><li>Free Response   (SHENAMA)</li></ul>

UI:<br>
<br>
Feed (S/I)  (FURBY)<br>
<ul><li>Questions　(S/I)  (FURBY)<br>
</li><li>Feedback  (S/I)  (FURBY)<br>
Survey (S/I)  (FURBY)<br>
Home (S)   (CHRIACUA)<br>
History (I)   (CHRIACUA)<br>
Help    (CHRIACUA)<br></li></ul>

<h1>Meeting 4/19</h1>
WHERE DID THE NOTES GO THEY WERE HERE!<br>
<br>
<h1>Meeting 4/14</h1>
<b>Main Achievement:</b> Worked more on our paper prototype. Will be testing today in ODE and 1101.<br>
<br>
<h1>Meeting 4/13</h1>
<b>Notes:</b>Clickable parts of our UI that aren't buttons (e.g. sorting options on feed tab) should probably use underlined text. This is standard for links, so underlining should make it more obvious that these UI elements are actually clickable.<br>
<br>
<h1>Meeting 4/12</h1>
Goals: Paper Prototyping, Getting familiar with Tech<br>
<br>
Reading Assignment due tomorrow<br>
Team Report Status due tonight<br>
<br>
<h3>Paper Prototyping</h3>
<b>For data and testing:</b>

Go to Ode, 1101 for students<br>
Go to Foggarty, Marty Stepp for instructor feedback<br>
<br>
<b>Tasks</b>

- Chris will make background<br>
<br>
- Each member will be responsible for a tab<br>
<br>
- <b>Wednesday</b> going to be when finish the prototype<br>
<br>
- Mike and Robert will write the tasks.<br>
<br>
<b>(PLEASE MAKE SURE TO READ THE WRITE UP FOR REQUIREMENTS ON THE TASKS.)</b>

- Chris send out emails to prof to schedule testing on Thursday<br>
<br>
- <b>Thursday</b> testing with profs and students<br>
<br>
- Work on writeup on Friday--Sunday<br>
<br>
<br>
<h3>Technology</h3>
Database is not MySQL<br>
look into UI technologies:<br>
<ul><li>Christopher - look into silverlight jazz/YUI</li></ul>

<ul><li>Chris - YUI/Jquery</li></ul>

<ul><li>Robert - Jquery/YUI</li></ul>

<ul><li>Mike - Getting started technologies guide</li></ul>

<ul><li>Amanda - Jquery</li></ul>


HTML/JavaScript -> Ajax -> Java -> PHP<br>
Jquery is a library for JavaScript<br>
<br>
<hr />
<h1>Meetings 4/8</h1>
<h3>Exec Meeting (Punya)</h3>
<ul><li>auto complete box that finds similar questions automatically<br>
</li><li>text message, register first with account, allow students to text in questions for simplicity<br>
</li><li>talk about marty and his feedback<br>
</li><li>Distraction issue (HUGE)<br>
</li><li>Focus on core experience in lecture and polish it.<br>
</li><li>Then work on out of lecture experience<br>
</li><li>Answer the question of large audience and shyness first<br>
</li><li>Take a look at quora<br>
</li><li>student ui needs to be less?<br>
</li><li>gmail authentication first, easy ---> then go into trying to work on the cs.washington.edu<br>
</li><li>specify that there are more features, that wil be posted on the wiki<br>
<h3>Customer Meeting</h3>
A major concern that was brought up by our customers was whether the application would become too much of a distraction. They wondered if we were trying to make it usable for all classroom types or if there were some classrooms that would be more suitable for it. They also wanted to know how we were going to keep track of our progress and what milestones we planned to hit to ensure that we were on track. In addition, the customers were very interested in what the UI would look like for both the instructor and student side. We were able to show them some UI mock ups and they seem satisfied with the overall design. The last major concern that they brought up was how the application was going to be different from a discussion board. A suggested feature that was brought up was a digitized white board. The customers were also strong advocates of a mobile application of our product, such that students would not have to open up their laptops.<br>
<h3>As a Customer Meeting</h3>
During our meeting, we, the customers, mostly tried to understand how the team planned to execute the tasks to make their application work. The main aspects of the application was a website, used by the clinics and hospitals and a mobile application, used by the couriers. They are going to utilize the android barcode scanners to scan in barcodes and save them to the server. Then, for the algorithm to route the couriers, they would be adopting an algorithm that is in research by some grad students at the University of Washington. The team would get destinations in an ordered list and input it into google maps for the courier. The team has not yet figured out what programming languages and technologies they were going to use, since they had yet to have their meeting. Their meeting was scheduled for later that day.</li></ul>

<b>Customer Meeting questions:</b>

<ul><li>what r ur milestones?</li></ul>

<ul><li>spam - how to control?</li></ul>


<ul><li>what would the features look like on the teacher vs student end? (showed ui)</li></ul>


<ul><li>what kind of questions r better than raising hands? none</li></ul>


<ul><li>how we going to present if prof isnt going to use pwpt or ne electronic device? depends on teacher and type of class<br>
diff between this and discussion board (DB)? prof wont be glued to DB feed and its not anonymous</li></ul>


<ul><li>is there the possibility that a question will get lost in the pool?</li></ul>


<b>Customer Suggestions</b>


<ul><li>discussion based classes (each group gets a section on the board-</li></ul>

<ul><li>whiteboard session; others can review it)</li></ul>


<ul><li>live digitized white board → but itd be hard to detect</li></ul>


<ul><li>most important stretch feature should be MOBILE <b>rang rang!</b></li></ul>

<hr />
<h1>Meeting 4/7</h1>
<b>Main Achievement:</b> Assignment 2 Writeup session.<br>
<hr />
<h1>Meeting 4/6</h1>

<b>Main Achievement:</b> Discussed UI and Team Name.<br>
<br>
<a href='http://code.google.com/p/classroom-presenter/wiki/UserInterfaceDocuments'>UI Documentation</a>

<h3>Google Groups Mailing List</h3>
fu11h0use@googlegroups.com<br>
<br>
<a href='http://groups.google.com/group/fu11h0use'>Archive</a>

<h3>Product Name</h3>
Incognito<br>
<br>
<hr />
<h1>Meeting 4/5</h1>

<h3>Software Tools</h3>
<ul><li>Front End<br>
<ul><li>Javascript, AJax, HTML, YUI(<a href='http://developer.yahoo.com/yui/3/'>http://developer.yahoo.com/yui/3/</a>), CSS,<br>
</li></ul></li><li>Back End<br>
<ul><li>Java, PHP<br>
Hosting:<br>
</li></ul></li><li>Options: Cubist, Student Web, Google Apps<br>
Database:<br>
</li><li>Google Apps<br>
Version Control:<br>
</li><li>Options: SVN, Google Code<br>
Documentation:<br>
</li><li><a href='https://cubist.cs.washington.edu/wiki/index.php/CSE403_Spring_2011'>Course Wiki</a></li></ul>

<h3>Weekly Meeting</h3>

Tuesdays &Thursdays 3:30-?<br>
<br>
Wednesday After class: 1h check-in<br>
<br>
<h3>Team Name</h3>
Full_House<br>
<br>
<h3>Google Code</h3>
<a href='http://code.google.com/p/classroom-presenter/'>Site</a>

<h3>Wiki</h3>
<a href='http://code.google.com/p/classroom-presenter/wiki/HomePage'>Home Page</a>

<h3>Google App</h3>
<a href='https://appengine.google.com/dashboard/nonedeployed?app_id=classroompresenter'>Site</a>