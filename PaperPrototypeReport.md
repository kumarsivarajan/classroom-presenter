**Anchors**<br>
<a href='PaperPrototypeReport#Reflection.md'>PaperPrototypeReport#Reflection</a><br>
<a href='PaperPrototypeReport#Team_Jtackk_Evaluation.md'>PaperPrototypeReport#Team_Jtackk_Evaluation</a>

<b>Downloadable shortened version</b><br>
<a href='http://code.google.com/p/classroom-presenter/downloads/detail?name=FullHouse_PaperPrototype.zip&can=2&q=#makechanges'>Get it!</a>

<h1>Reflection</h1>

In addition to the paper prototype exercise in class last Friday, we also interviewed Professor James Fogarty in order to collect more feedback on Incognito’s instructor side. These two sessions showed us what was effective in our design, and also helped us identify ways to further improve our interface.<br>
<br>
<h2>Instructor’s Perspective</h2>

In terms of the teacher’s side of the application, there were common areas of confusion in both sessions. One of our first tasks was for the participant to “open” a class session, which would then open the feed for student submissions. In our current design, the only way to do this is to select the “View Timeline” link and click the “Start” button once the timeline graph appeared. This was not immediately obvious to our participants. Similarly, closing a class session also proved to be somewhat unintuitive with our current interface. In order to make these tasks more intuitive, which is crucial for the application’s in-class experience, we will be adding more visible and descriptive links on the top of each page (where the professor’s personal, help, logout, and class information is made available).<br>
<br>
<i>Survey Page Improvements</i>

There are various features on the Survey page that need improvement. One such feature is the Survey page’s “Open?” column. This feature’s intended purpose - to allow the teacher to change the visibility of the survey to the students as well as indicate the survey’s current status - was not clear to our customers. Also, the checkboxes in this column do not effectively present the different states (closed, open, and recently created) that we want to be saved in a logical manner. We plan to solve these problems by renaming the “Open?” column to “Status” and changing the column’s checkboxes to drop-down menus. We also plan to extend the survey page to allow instructors to edit and delete surveys regardless of their status. Finally, we will add an option to remove multiple-choice options to complement the “add” option, which will allow instructors to easily edit their surveys.<br>
<br>
<i>Functionality vs. Distraction</i>

In our paper prototyping session with Professor Fogarty, we discussed how to achieve a balance between functionality and distraction. Specifically, we considered allowing questions to pop up next to the timeline while PowerPoint is visible. This could be convenient for instructors, but it could also divert their attention from their lectures. One possible solution is to make this feature collapsible, such that instructors who see this option as a distraction can disable it, while professors like Fogarty can enable it to aid their teaching style. We also discussed the possibility of extending our line graph to depict three distinct categories of confusion that Fogarty identified: individual, unrelated questions; many students with the same question; and a “burst of confusion” where a specific topic spurs many different questions from students.<br>
<br>
<h2>Student’s Perspective</h2>

Some aspects of Incognito’s voting system were confusing to our customers. They liked the “thumbs up” feature next to the question for voting, instead of a “finger up” for voting. However, the behavior of our auto-complete feature was unclear to them. Currently, if a student selects a question suggested by the auto-complete box, Incognito submits a vote for the selected question. The “thumbs up” voting method seemed to be more intuitive. Our customers also indicated that displaying multiple surveys was slightly disorganized, and that they would like it to be more streamlined.<br>
<br>
<h2>Conclusion</h2>

Our experiences with our paper prototype yielded a lot of valuable insight. We expected some parts of the UI to be somewhat confusing, and it was interesting to see how the participants dealt with such difficulties. We plan to implement many of the suggestions made by our customer group and Professor Fogarty concerning both the instructor and student sides of Incognito. Since we did not have much time to go over the student-side evaluation of our product, we feel that we may have focused excessively on the instructor side of Incognito, at the expense of the student side. We could have avoided this by allocating more tasks and user testing to the student-side and less for the teacher-side, in order to ensure that both aspects of Incognito were evaluated.<br>
<br>
<hr />
<h1>Team Jtackk Evaluation</h1>

The primary components of team Jtackk’s lab medicine system are the hospital/client side, the courier tracking system, and the couriers’ mobile application. Thus, we have divided our evaluation of the product into three sections, each corresponding to an individual component. Each section discusses our first impression of the component’s interface from our experience with the team’s paper prototype, and also evaluates how well the component fulfils its requirements.<br>
<br>
<h2>Hospital/Client</h2>

The hospital/client side of the system consists of a website that allows users to enter information about lab specimens into a fairly simple form. The website seemed to allow users to enter the required data fairly easily. However, it was not obvious how to edit an inventory submission, and the interface did not indicate how long a user would have to change a submission or correct a mistake. We were also confused by some of the form’s fields. For example, the form included a “Color” field, but there was no obvious way for a user to determine what color should be entered for any given specimen.<br>
<br>
<h2>Courier Tracking</h2>

The courier tracking system is designed to track the progress of specimens that have been entered into the inventory. A website allows users to monitor specimens, filter and search the specimen list, and view statistics about the specimens.<br>
<br>
As with the hospital/client website, this component served its primary purpose adequately, but the functionality of some of its features and UI elements was unclear. In particular, the specimen statistics were displayed as graphs, but the axes were not labeled, so it was difficult to determine what information the graphs were meant to convey. Clear labels for the graphs’ axes and data would make the graphs much easier to interpret. The website also featured a filter and a search function, but it was not obvious whether filtering reduces the amount of entries that can be searched, or whether the search function searches through all lab specimens. On most other websites, the search function searches the filtered entries. We believe the courier tracking system’s search function would be more familiar and intuitive if it behaved similarly.<br>
<br>
<h2>Mobile Application</h2>

The smart phone component of the lab medicine system tells couriers where to pick up their next specimens. As hospitals and labs add specimens for pickup, the mobile application produces a route for the couriers. Once a courier pick up a specimen, he or she scans it with the mobile application, which automatically updates the specimen’s status in the tracking system. This is a logical role for the mobile application to fill, and it appeared to fill its role sufficiently. However, we identified several areas where it could be further refined.<br>
<br>
One thing that confused us was that after the courier selects “Scan” on the main menu, the app displays a separate bar scanner page, where the courier must again select “Scan.” We felt that this was unnecessary and required more clicks than needed. Also, there were checkboxes next to each specimen, but the purpose of these checkboxes was unclear.<br>
<br>
We also noticed that although the mobile application displays the results of a scan after the scan is complete, there was no clear way to discard incorrect data. Scanning data from barcodes is less reliable than downloading data directly, so couriers should be able to discard a scan if it is not correct. One solution to this problem would be to add “Save” and “Discard” buttons to the scan results screen.<br>
<br>
Finally, we noted that the scan results screen included buttons for zooming in and out. These were intended to allow couriers to more easily view the scan’s results. We felt that offering a zoom option on this screen was a good idea, but also that using touch buttons for this purpose was unconventional, and therefore would be less familar to couriers already accustomed to existing touchscreen smart phones. We suggested that these buttons could be replaced by the standard touchscreen pinch-to-zoom interface. This would make the courier application’s interface more familiar and intuitive, while also freeing screen space for other UI elements, such as the “Save” and “Discard” buttons discussed previously.<br>
<br>
<h2>Conclusion</h2>

Overall, we believe team Jtackk did well in defining the problem and designing a solution. Their system seemed to effectively address the need for hospitals, labs and couriers to manage and track samples. The main idea behind their system was clear and reasonable, but some of their system’s features and UI elements were confusing to us. However, we hope that our feedback will help them refine these components and improve their system as a whole.