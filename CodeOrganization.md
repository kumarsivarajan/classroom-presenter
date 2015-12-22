### Notes ###
  * jQuery Library files have been omitted.

 Deprecated
**Stretch Feature**

## Overview ##
All of our visual pages that have html code in it are PHP pages and they show up in the instr/ or student/ folder. Javascript files that support the php page are in the instr/ or student/ folders as well. The js and php files in the script folder handle the backend scripting. The js files are created as just a library for the front end js pages to call against and the php files are the scripts that talk to the db.

## Structure ##
```
 |-> db_credentials.php                  DB credentials for testing DB

-DB/                                  ===DB related scripts
 |-> CreateScript.sql                    Creates the tables needed.
 |-> DropScript.sql                      Drops the tables.
 |-> PopulateScript.sql                  **Populates the data with some dummy data. 

-Incognito/                           ===Main website files
 |->bugreport.php                        Bug Reporting page.
 |->db_credentials.php                   DB credentials for production DB
 |->doLogin.php                          Script for logging in as either student/inst
 |->login.php                            Login Page for instr and students.
 |->logo.png                             Logo image.
 |->pages.css                            CSS page for all pages on the site.
 |->submit_bug.php                       Script for submitting bug.
 |->video_tutorial                       ***Place holder for video tutorial
 |->students/                         ===BE and FE files specific to students
 .|->.htaccess                           Sets authentication scheme
 .|->common_student.php                  Common Nav bar, lower links for students
 .|->help_student_troubleshooting.php ---
 .|->help_questions_feedback           |
 .|->help_student_courses.php          |  
 .|->help_student_feed.php             |--> Help pages
 .|->help_student_surveys.php          |
 .|->help_students.php                ---
 .|->studentSettings.js                  JavaScript for Student Settings 
 .|->studentUIcontroller.js              Submit Question Library  
 .|->studentfeed.js                      JavaScript for Student feed 
 .|->studentfeed.php                     Student feed page.
 .|->studenthome.php                     Student home page.
 .|->studentsettings.php                 Student settings page.
 .|->studentsurvey.js                    JavaScript for Student survey
 .|->studentsurveys.php                  Student survey page.
 .|->scripts/ 		              ===Scripts for backend functions
 ..|->add_alias.php                      **Script to add an alias for student
 ..|->add_course.php                     Script to add a course for a student
 ..|->delete_course.php                  Script to delete a course for a student
 ..|->exit_session.php                   Script to exit a session for student
 ..|->get_alias.php                      **Script to get the alias of a student
 ..|->get_choices.php                    Script to get choices for MC
 ..|->get_courses.php                    Script to get course list for a student
 ..|->get_survey.php                     Script to get the list of open surveys
 ..|->join_session.php                   Script to join an open session
 ..|->logout.php                         Script that does logout for student
 ..|->studentfeed_lookup_questions.php   Script that does q/f lookup for Student feed
 ..|->studenthome_lookup_questions.php   Script that does q/f lookup for Student home
 ..|->StudentSettingsView.js             Student Settings Javascript Library        
 ..|->StudentSurveyView.js               Student Survey Javascript Library
 ..|->submit_question_feedback.php       Script to submit Q/F    
 ..|->submit_survey_answer.php           Script that submits answers to a survey
 ..|->submit_vote.php                    Script that submits a vote to a Q/F
 |->instr/                            ===BE and FE files specific to instructors
 .|->common_instructor.php               Common Nav bar, lower links for instructors            
 .|->graph.php                           Page for the timeline graph
 .|->help_instr_courses.php             ---  
 .|->help_instr_questions_feedback.php   |
 .|->help_instr_surveys.php              |---> Help Pages for Instructor
 .|->help_instr_timeline.php             |
 .|->help_instr_troubleshooting.php      |
 .|->help_instructors.php               ---
 .|->instructorfeed.js                   Javascript for Instructor feed
 .|->instructorfeed.php                  Page for Instructor feed
 .|->instructorfree.php                  Page for Instructor Survey: Free Response
 .|->instructormultiple.js               Javascript for Instructor Survey: Multiple Choice
 .|->instructormultiple.php              Page for Instructor Survey: Multiple Choice
 .|->instructorSettings.js               Javascript for Instructor Settings page
 .|->instructorsettings.php              Page for Instructor Settings
 .|->instructorsurvey.js                 Javascript for Instructor Surveys
 .|->plotWindow.js                       Javasctipt for timeline graph
 .|->scripts/                         ===Scripts for backend functions
 ..|->addStudent.php                     Script for adding a student
 ..|->answer_question.php                Script for setting a Q/F as answered or read
 ..|->close_survey.php                   Script for closing a survey
 ..|->create_course.php                  Script for creating a course
 ..|->create_survey.php                  Script for creating a survey
 ..|->delete_course.php                  Script for deleting a survey
 ..|->end_session.php                    Script for ending a session
 ..|->get_courses.php                    Script for getting an instructors course list
 ..|->get_results.php                    Script for getting results for a survey
 ..|->get_survey.php                     Script for getting a survey
 ..|->InstrSettingsView.js               Javascript Library for Instructor Settings
 ..|->InstrSurveyView.js                 Javascript Library for Instructor Survey
 ..|->logout.php                         Script for logging out 
 ..|->lookup_questions.php               Script for looking up questions
 ..|->start_session.php                  Script for starting a session
 ..|->start_survey.php                   Script for starting a survey
 ..|->submit_survey.php                  Script for submitting a survey
 ..|->timeline.php                       Script for getting data for the timeline
 

-java/                                ===Java Library for jsUnit tests

-testing/                             ===Folder with all of the testing related stuff
.|->phpunit/
..|->build.xml                           Ant script for running tests
```