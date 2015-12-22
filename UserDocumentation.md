## Documentation (ZFR) ##
**Overview**

Incognito is a website designed to allow students in large university classes to interact anonymously with their instructors in real time during class. Students can use Incognito to ask their instructors questions, in much the same way that students already ask questions by raising their hands. In addition, Incognito lets students submit comments and feedback to their instructors, while instructors can use it to quiz their students during class.

There are many obstacles that can keep students from asking questions. Some students may not be comfortable asking a question aloud in very large classes, and may instead remain quiet. Students may also be hesitant to ask questions if they feel that it is not an appropriate time - for example, if the instructor has moved on to another topic. If many students have questions, the instructor may not have time to answer all of them, so questions may go unanswered even if students raise their hands in class. This problem can also arise if students try to ask questions after class.

Students already have several methods for asking questions and submitting feedback, such as email, class discussion boards, office hours, and raising their hands in class. However, none of these options offer interaction that is both real-time and anonymous. Email, discussion boards and office hours can only be used outside of class. Conversely, while verbally asking questions during class allows questions and confusion to be resolved immediately, students cannot remain anonymous while doing so. This is Incognito’s intended role. By concealing users’ true identities, the website will permit fully interactive communication between students and instructors without compromising student anonymity.

**How-to**

A demo of the site is available at [Incognito](https://cubist.cs.washington.edu/~ashen/Incognito/login.php). At this point the demo site is running our Release Candidate.

For the demo site you can log in using your UW csNetid. If you experience problems, please contact the PM (ashen@cs) for further help.

For reporting any problems that you encounter please submit an issue [here](http://code.google.com/p/classroom-presenter/issues/list). Or you can submit a bug report directly from our site using the Report Bug link on the bottom of the pages, after you have logged in.

Instructions on how to create new Issues are [here](http://code.google.com/p/classroom-presenter/wiki/IssueTracking).

_Students:_

  * Enroll for a course: (Working)
    1. Give your CS Net ID to the instructor teaching the course.
    1. Go to your settings page and wait till the instructor has added you. Once you are added, the course will show up in your course list.

  * View enrolled courses: (Working)
    1. Go to the "Your Courses" page.
    1. The list of courses you are enrolled for will show up in your course list.

  * Join a session: (Working)
    1. Go to the "Your Courses" page
    1. Under course list, courses with open session will have a join session button next to it.
    1. Click "Join Session."
    1. Go to the feed page and you should be able to view the feed for that session.

  * Change your alias: (Deprecated)
    1. Go to the "Your Courses" page
    1. Type your new alias into the change alias box.
    1. Click change alias button.

  * Submitting a question: (Working)
    1. Go to the student home or feed page.
    1. Type your question into the provided text box.
    1. Select “Question” from the “Submit As:” options above the text box.
    1. Click “Submit”.


  * Submitting feedback:(Working)
    1. Go to the student home or feed page.
    1. Type your feedback into the provided text box.
    1. Select “Feedback” from the “Submit As:” options above the text box.
    1. Click “Submit”.


  * Submitting a response to a Free Response or Multiple Choice: (Working)
    1. Go to the student survey page
    1. Click the “Respond” button next to the prompt you want to answer.
    1. A pop up will appear.
    1. For free response surveys, type your response into the provided text box. For multiple choice surveys, select one of the provided choices.
    1. Click “Submit”.


  * Voting for an already submitted question or comment: (Working)
    * Option 1:
      1. Go to the student home or feed page.
      1. Begin typing your question or comment into the text box. An auto-complete form will display past submissions that match your entry.
      1. Select the desired submission from the auto-complete form.
      1. Click “Submit”.
    * Option 2:
      1. Go to the student feed page.
      1. Check the checkbox next to the question or comment you want to vote for.

_Instructors:_
  * Create a course: (Working)
    1. Go to the "Your Courses" page
    1. In the create a course form, give your course a descriptive name(eg CSE440\_spring) and enter a mailing list(optional).
    1. Click "Add!"
    1. You should see the course in your course list now.

  * Add student to a course: (Working)
    1. Go to the "Your Courses" page
    1. In the add students form, type in the course name (the name that is listed in the course list.) and the student's CSE NETID
    1. Click "Add Student."
    1. A pop-up dialog box will appear to confirm that the student was added successfully.

  * Opening a class feed: (Working)
    1. Go to the "Your Courses" page.
    1. Make sure all other course sessions are closed.
    1. Click the "Open?" button next to the course feed you want to open.

  * Closing a class feed: (Working)
    1. Go to the "Your Courses" page.
    1. If the class session is open, you should see a "Close?" button next to that course.
    1. Click the close button.

  * Using the line graph overlay: (Working)
    1. Open the current session’s feed.
    1. From the instructor feed or survey page, click the “View Timeline” button on the right side of the navigation bar. The line graph window will appear.
    1. To hide the line graph, minimize its window.


  * Creating a multiple choice poll: (Working)
    1. On the instructor survey page, select “Multiple Choice” from the options above the text box.
    1. Type the poll’s prompt into the text box.
    1. Type the answer options (up to 4) into the fields below the text box.
    1. Click “Create."

  * Creating a free response question: (Working)
    1. On the instructor survey page, select “Free Response” from the options above the text box.
    1. Type the question’s prompt into the text box.
    1. Click “Create”.

  * Starting a survey: (Working)
    1. Open the instructor survey page.
    1. After creating a survey, click the "Start Survey" button for that survey.

  * Closing a survey: (Working)
    1. Open the instructor survey page.
    1. Click the "Stop Survey" button for the survey you want to close.

  * Viewing responses to a survey: (Working)
    1. Open the instructor survey page.
    1. Click the "Get Results" button for the desired survey. A pop-up window will appear and display overall results for that survey.

## Flow Chart ##

Download the [High quality Version](http://code.google.com/p/classroom-presenter/downloads/detail?name=User_Flow_Chart.pdf&can=2&q=#makechanges)