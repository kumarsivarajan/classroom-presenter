Original Docs: [Product Description](https://docs.google.com/document/d/1fjLfx55ENoTXp5pEndEnGGAootu8toqfwZDB-n1-x0I/edit?hl=en&authkey=CKKt9N4N), [Process Description](https://docs.google.com/document/d/16ngMqy8UDrSe0EspiwGTU3Kb54mIxructDJ68Pi91XA/edit?hl=en&authkey=CM7HxIUP), [Use Cases](https://docs.google.com/document/d/1LZgmNXGnlvV7wjSE4RxLWkLixgDLa5Ww5wZnx1arohU/edit?hl=en&authkey=CPObzqgO), and [UI](https://docs.google.com/leaf?id=10R7Hump0IQfYVVGhlkGiBn6j71NiUjEi-9yGFUBcPVKZQnxLSAF_YHFzLPy6&hl=en&authkey=CKuLxpQG).

# Product #
### Introduction ###

The product that we are presenting, Incognito, is a web site that will allow students to submit questions and feedback to their instructors in real time during class. This application will lower the barriers that discourage students from asking questions in class or seeking answers after class. It will also give instructors a better understanding of the class’s overall progress, thus enabling students and instructors to interact more effectively in a large classroom setting.

For more information on the problem, proposed solution, alternatives to our solution and more please follow this [link](http://code.google.com/p/classroom-presenter/wiki/ProductDescription).


### Features ###

Please follow this [link](http://code.google.com/p/classroom-presenter/wiki/ProductFeatures) for features that we are planning to implement. This page will be updated often with design changes throughout the quarter.

### UI Mock Ups ###
[I want to see!](https://docs.google.com/leaf?id=10R7Hump0IQfYVVGhlkGiBn6j71NiUjEi-9yGFUBcPVKZQnxLSAF_YHFzLPy6&hl=en)


---

# Process #
### Software Tool Set ###
**Programming Languages**

~~Incognito’s back-end will be developed in Java, while its front-end will be developed in HTML, CSS, and Javascript, and PHP. We chose to use Java for the back-end because of its powerful built-in libraries, which include libraries for interacting with SQL databases, and because of our team’s familiarity with Java development. PHP allows convenient interaction with SQL databases, and Javascript will allow us to make our website dynamic. Finally, CSS will help to standardize design elements of our website.~~

![https://lh5.googleusercontent.com/_4yreu12cTb4/Tczk4QZDSuI/AAAAAAAAFFM/n85BjFzXHTk/update.jpg](https://lh5.googleusercontent.com/_4yreu12cTb4/Tczk4QZDSuI/AAAAAAAAFFM/n85BjFzXHTk/update.jpg) 5/12

> Incognito's back-end is being developed using PHP, while it's front-end will be developed in HTML, CSS, and JavaScript. We chose to move away from Java for the back-end since we are not really using Java's build in libraries. We find PHP to be sufficient when dealing with the DB. Another reason we decided to move away from Java is so that we wouldn't have to ramp ourselves up with JVM, Jetty Servlets, containers etc.
![https://lh5.googleusercontent.com/_4yreu12cTb4/TczlBmfevKI/AAAAAAAAFFQ/VVFRDEhk8QU/end.jpg](https://lh5.googleusercontent.com/_4yreu12cTb4/TczlBmfevKI/AAAAAAAAFFQ/VVFRDEhk8QU/end.jpg)

**Other Tools**
  * Google Code: This service offers built-in Mercurial version control and an issue-tracking system.
  * [Eclipse](http://code.google.com/p/classroom-presenter/wiki/DevEnviromentSetup#Eclipse): The Eclipse Java IDE offers many useful features such as code folding, quick fix support, and quick outline view. These features will help our developers work more productively. In addition, Eclipse has a large user support base.
  * Eclipse Mercurial plug-in: This will make back-end development more efficient by giving our developers access to Mercurial from within Eclipse.
  * [YUI](http://code.google.com/p/classroom-presenter/wiki/DevEnviromentSetup#YUI): We hope to look into YUI as a possible resource for developing Incognito’s user interface.

![https://lh5.googleusercontent.com/_4yreu12cTb4/Tczk4QZDSuI/AAAAAAAAFFM/n85BjFzXHTk/update.jpg](https://lh5.googleusercontent.com/_4yreu12cTb4/Tczk4QZDSuI/AAAAAAAAFFM/n85BjFzXHTk/update.jpg) 5/12

  * [PHPunit](http://code.google.com/p/classroom-presenter/wiki/RunningTests#phpUnit_Tests): We are using this to write our php unit tests for the back end.
  * [jsUnit](http://code.google.com/p/classroom-presenter/wiki/RunningTests#jsUnit_Tests): We are using this to write our js unit tests for the front end.
  * Hudson: We are using Hudson for CI integration.

![https://lh5.googleusercontent.com/_4yreu12cTb4/TczlBmfevKI/AAAAAAAAFFQ/VVFRDEhk8QU/end.jpg](https://lh5.googleusercontent.com/_4yreu12cTb4/TczlBmfevKI/AAAAAAAAFFQ/VVFRDEhk8QU/end.jpg)

**Data Sources**

The main data source will be interaction between instructors and their students. Data will be received in the form of questions, feedback, and answers to free response questions or polls asked by instructors during lecture. The instructor will then use this data to enhance the students’ learning experience and to make adjustments to future lectures.

### Group Dynamics ###

We have elected Amanda to be the Project Manager, Christine Marie to be the front-end lead, and Robert to be the back-end lead. ~~Robert and Mike will concentrate on the back-end, working with Java, PHP and the database. Christine Marie will be our primary user interface designer and will work with Christopher on HTML, CSS, and JavaScript development for the website's front-end.~~ Amanda will work on testing, and will also assist with front-end and back-end development as needed. We have chosen these roles based on individual interest and skill level. However, because of our team’s size, our assignments will be flexible. We will temporarily reassign developers to other project areas as needed to deal with unexpected problems.

Our group will function best if we are in agreement, so we will try to achieve consensus on issues where we disagree. If this fails, we will use majority vote to reach a decision. This team structure is a hybrid of both the dominion team structure and the communication team structure. Because our team is comparatively small, we believe further decision-making structure would not be valuable.

The product life-cycle that we will adhere to is Staged Delivery. Since our time and resources are limited, Staged Delivery’s shorter and more predictable cycles will allow us to catch problems early and often. Also, Staged Delivery allows us to ship at the end of any release cycle, so we have the option to fall back on an earlier release if time becomes a factor.

![https://lh5.googleusercontent.com/_4yreu12cTb4/Tczk4QZDSuI/AAAAAAAAFFM/n85BjFzXHTk/update.jpg](https://lh5.googleusercontent.com/_4yreu12cTb4/Tczk4QZDSuI/AAAAAAAAFFM/n85BjFzXHTk/update.jpg) 5/12
> Mike and Chris will be working on front end and Robert and Christopher will be working on the back end. We made this change due to first of all the change in software tool set and then to adjust to skill level.

![https://lh5.googleusercontent.com/_4yreu12cTb4/TczlBmfevKI/AAAAAAAAFFQ/VVFRDEhk8QU/end.jpg](https://lh5.googleusercontent.com/_4yreu12cTb4/TczlBmfevKI/AAAAAAAAFFQ/VVFRDEhk8QU/end.jpg)