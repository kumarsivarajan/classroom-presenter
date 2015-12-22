## Tasks (core functions we want tested): ##
The students ability to ask questions. This includes asking new questions and previous questions.

The instructor’s ability to answer class questions. This includes viewing the current session and previous sessions, in addition to being able to mark questions as answered and unanswered and being able to view and understand results from the feed.

The instructor’s ability to evaluate the results of polls/discussions.
User’s ability to answer a poll/free response question.


## Core Feedback We Want: ##

Easy and simple to use (students and instructors)?

Level of Distraction. Ability to get in and out quickly.

Usefulness of some of the features in the UI (filters, sorting).

Organization makes sense?

Potential useful features/functionality that may improve their
experience.


## Scenarios: ##

1.You are in databases lecture and you have a question that you want to ask the instructor.
The question is “Do we always have to use a GROUP BY clause if we use HAVING?”

2. You are in databases lecture and you have a question that you want to ask the instructor. The question is “What happens to the subordinates when the coordinator crashes?” and the question has already been asked, so you then click the question in the auto complete to vote for that question.

3. The instructor notices that there is increased activity and goes to Incognito to find question. From the feed of questions, the instructor then sorts the feed of questions by popularity and picks the question that is most popular to answer. the instructor then marks

4. The instructor wants to figure out whether or not students understand the concept of networking. So, the instructor pulls up the poll tab, and types in, “What is the main concept of networks today?” The options that he sets are protocol layering, demultiplexing, and social networking, and the time restraint to be 10 minutes. After 10 minutes, the students have finished filling in their answers, and the results come in. 60% choose social networking, 20% choose demultiplexing, and 10% choose protocol layering. The instructor, then, decides to go over protocol layering one more time, to make sure the students understand the material.

## Instructor Scenario ##
**Task 1: Teacher - During Lecture**

Imagine you are a teacher at the University of Washington. Class is almost about to begin. You already have your PowerPoint slides open and ready to go and you have already navigated to Incognito’s log-in page. You proceed to log-in.

Now that you have logged in, you want to open the class session and view the timeline that will show the number of questions students have as lecture progresses. Once you open this graph, you want to start the timer to open up the feed to students.

Sometime has elapsed and things are going great- there wasn’t too many questions. Halfway through lecture, however, you notice that there is a spike of submissions on the timeline. Before you move on to a different topic, you decide to take questions. In order to view this feed, you must go back to Incognito’s “Feed” page.

From the feed, you sort the feed of questions by popularity and pick the question that is most popular. You sort the feed, go over the question in class, and mark this question as answered so that you know not to answer it again in the future.

After answering a few more questions, you decide that this is the perfect time to open one of your already created surveys. Navigate to this page.

You want to make visible the first saved survey. Do so now.

In addition to opening up the survey for students to submit their answer via Incognito you also ask the question out loud to the class. From both Incognito and direct student feedback, you decide you are not satisfied with the overall consensus to your question. You decide you want to create an impromptu question to see how much of today’s lecture students really understood. You decide to make the following Multiple Choice Question and once you are done, you open this question up to the class:

> “What is the main concept of networks today?” The options that he sets are A) protocol layering, B) demultiplexing, C) social networking, and D) None of the above.

After a minute, the students have finished filling in their answers, and the results come in and you close the survey. You now want to view the answers.

You see that 60% chose social networking, 20% choose demultiplexing, and 10% choose protocol layering. The answer was protocol layering. You decide to go over protocol layering one more time, to make sure the students understand the material.

Class has now ended and you need to close the student feed. Do so now and when you are finished, state that you are done.


**Task 2: Teacher - After Lecture**

After lecture, you immediately have your office hours which no one goes to. You decide to pull up questions from lectures from April 11th-13th.
Now you decide to look at just today’s April 15th. Once you are done, state you are done.

---

# Actual Feedback #

_(Raw Notes-See PaperPrototypeReport for detailed report)_

## Our Comments to Customers ##

### Hospital/Client-side ###
  * Not exactly clear how the bar code scanning will work.
  * Some of the fields for adding specimens is a little confusing
    * The number field and the color field is a bit confusing
  * Not exactly clear about if you make a mistake on an inventory submission when you can correct mistakes
    * Might want to make this more obvious, like a pop-up window that informs you how long you have to change the submission

### Lab-side ###
  * The graphs and statistics are a bit unclear
  * Filtering by barcodes could be problematic because you could have many bar codes
  * Search function searches everything, this wasn’t clear from the beginning

### Mobile Application ###
  * The scan function might be unnecessary because it seems like you just click on a button for a specimen that you are picking up instead of clicking a specific specimen
  * Not clear what to do if the contents of the lab specimen are incorrect once you scan the barcode
  * Zoom function might be unnecessary to add consistency
    * Maybe doing the pinching zoom if you want to add the feature, just because that is the convention


## Comments from our Customers ##

### Teacher-side ###
  * Wants a clear button to transition back to Incognito from powerpoint
  * Maybe a skipped button for questions that will be answered later
  * They are having a little trouble understanding the polls/free response tool
    * There has to be a way for people who don’t have laptops to still view the question
  * There should be a some sort of undo tool if the teacher accidentally creates an unnecessary/incorrect multiple choice answer
  * Drop down for the saved, open, and completed part for polls/free response
  * It is a little confusing how to close the feed of questions logging out, going back to the power point

### Student-side ###
  * Some questions on asking the same question
  * Not clear how the auto-complete voting
    * Seem to like thumbs up next to question for voting
  * If there are multiple surveys, they need to be a little more inline

## Comments from Instructor (Foggarty) ##

  * The survey thing is not very noticeable → This could be two things. First he mentioned that starting the timeline wasn’t very clear and he only clicked it because someone repeated the word “timeline” and that was the only indicator he had that made him click our “View Timeline” link. The other thing this note may be referring to is what is talked about in the next bullet (the checkboxes for the survey’s open feature.)
  * checkboxes are weird, maybe drop down → in terms of the survey’s “Open” feature. It seems that for the different states that we want to be saved (i.e. Closed, Saved, Just Created or whatever we wanted to call them), a checkbox does not encompass this information in a way that is logical. Having a drop down menu would make more sense in this case. We also got this critique from our customer group (this is the feature that I am currently trying to explain in the other doc but didnt know what to call it).
  * Stop button needs to be more visible
  * Concept of starting/stopping feed is not clear. View timeline is too insignificant.
  * quick look at highest priority question overlay may also be nice (scrolling)
    * I don’t like how i have to navigate away from my slides, too much work
  * expansion of questions → In this portion of our discussion with him, we were weighing the option of whether having questions pop up next to the timeline (in the powerpoint) would be distracting. So then the suggestion was made that maybe having an option on the side of the timeline to “collapse and expand” the highest priority questions may mitigate both cases (i.e. the case where teachers would think its distracting as well as the case where professors like Fogarty would want to see them otherwise the tool is useless for their teaching style). As an aside, we also discussed maybe having a line graph that depicts the 3 areas of confusion that Forgarty identified: 1) a line that showed questions on an individual basis, 2) a line that showed how many students with the same question (the supported confusion below), and 3) the “burst of confusion” where a specific topic spurred many questions from students.
  * mirror--> shows same
  * extend → 2 different (presenter style)
  * unsure indicator( usually I guage expressions)
    * diff sorts of confusion
    * burst of confusion
    * supported confusion

## Comments from Instructor (Stepp) ##

General UI Comments
  * Might want to limit the number of things on the page when we are filling out a form
    * we could also use some sort of horizontal rule to divide the page to make it more obvious what is associated with the form

Going through the script
  * Some confusion once logged in
  * What do I do next?
  * Need some way to make it more obvious how to start a classroom session
    * View Timeline seems like a heading, but also a link...?
    * Maybe would be a little more noticeable on the actual UI with color
  * Don’t put links in the corner
  * Question answering seems pretty intuitive, and navigating back to Incognito seems intuitive as well
  * Having some problems with surveys
  * general purpose
  * what opening does
  * making a multiple choice survey was definitely improved
  * move submit to below multiple choice
  * when you create a question you don’t need to view the other questions, necessarily
  * maybe a pop-up window for creating a survey that opens and closes (collapsible)

Other Feedback
  * Google design strategy
  * Some pages have too much going on
    * But facebook does that, but it may be because they want you to stay on the same page
  * Hiding surveys, but with new sessions you can try to make everything clean
  * Catalyst problem, too much stuff going on the page that is no longer relevant
  * Keep things on a page that are related
  * Want a separate page for creating and viewing results for survey
  * Each page needs to be really focused
  * Page with existing questions, page for creating questions, and a page for viewing results
  * Some sort of warning that you are currently closed, or that nobody can submit questions

History Feature
  * Seems to like this feature
  * Likes the simplicity
  * Don’t necessarily need the same day check box, allowable behavior to set the calendar to the same day
    * setting and ending date is not that hard
  * What if the amount of questions starts to get large
    * liked the filters