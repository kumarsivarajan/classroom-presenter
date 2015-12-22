# Development Resources (links) #
http://devzone.zend.com/article/1300

# Setting up Development Environment #

**Anchors** <br>
<a href='DevEnviromentSetup#Visio.md'>DevEnviromentSetup#Visio</a><br>
<a href='DevEnviromentSetup#Database.md'>DevEnviromentSetup#Database</a><br>
<a href='DevEnviromentSetup#UML.md'>DevEnviromentSetup#UML</a><br>
<a href='DevEnviromentSetup#Eclipse.md'>DevEnviromentSetup#Eclipse</a><br>
<a href='DevEnviromentSetup#Mercurial.md'>DevEnviromentSetup#Mercurial</a><br>
<a href='DevEnviromentSetup#YUI.md'>DevEnviromentSetup#YUI</a><br>
<a href='DevEnviromentSetup#JQuery.md'>DevEnviromentSetup#JQuery</a><br>
<a href='DevEnviromentSetup#Javascript.md'>DevEnviromentSetup#Javascript</a><br>
<a href='DevEnviromentSetup#Unit_Tests.md'>DevEnviromentSetup#Unit_Tests</a><br>

<h2>SSHing without a key</h2>

If you are tired of typing the password over and over again like I am,<br>
here is a guide on how to setup ssh-ing without a password:<br>
<a href='http://www.thegeekstuff.com/2008/11/3-steps-to-perform-ssh-login-without-password-using-ssh-keygen-ssh-copy-id/'>http://www.thegeekstuff.com/2008/11/3-steps-to-perform-ssh-login-without-password-using-ssh-keygen-ssh-copy-id/</a>
###############################################################<br>
<h2>Eclipse</h2>

First, you want to download Eclipse, through <a href='http://www.eclipse.org/downloads/'>http://www.eclipse.org/downloads/</a>
<br>Make sure you get the Eclipse IDE for Java Developers<br>
In addition, make sure you have the latest JDK<br>
<br><a href='http://www.oracle.com/technetwork/java/javase/downloads/index.html'>http://www.oracle.com/technetwork/java/javase/downloads/index.html</a>

<i>Changing Indentation in Eclipse</i>

To change Indent space, you want to go to Window and Preferences.<br>
<br>
Then, you want to go to Javascript, then Coding Style, and then Formatter.<br>
<br>
Under this heading, now, you can edit the profile to change tab spacing.<br>
<br>
You can also do this for any other language.<br>
<br>
<br>
<i>Eclipse plugin for Mercurial</i>

On the "Help" tab, you want to click on "Install New Software..."<br>
Add this URL into the "Work with:" field:<br>
<br>
<a href='http://cbes.javaforge.com/update'>http://cbes.javaforge.com/update</a>

In order to import a mercurial project, you want to go to File => Import...<br>
<br>
Then, under the Mercurial section, Clone existing Mercurial project.<br>
<br>
Here is a tutorial of how to Mercurial Eclipse:<br>
<br>
<a href='http://www.javaforge.com/wiki/78696'>http://www.javaforge.com/wiki/78696</a>

<i>Eclipse plugin for XML, PHP, and Javascript</i>

On the "Help" tab, you want to click on "Install New Software..."<br>
Add this URL into the "Work with:" field:<br>
<br>
<a href='http://download.eclipse.org/releases/helios/'>http://download.eclipse.org/releases/helios/</a>

Under programming tools add JavaScript, XML and PHP tools and continue through installing the plugins.<br>
<br>
<br>
###### Since we are using cubist, this is not applicable ######<br>
<i>Eclipse plugin for Google App Engine</i>

On the "Help" tab, you want to click on "Install New Software..."<br>
Add this URL into the "Work with:" field:<br>
<br>
<a href='http://dl.google.com/eclipse/plugin/3.6'>http://dl.google.com/eclipse/plugin/3.6</a>

In addition, here is a quick start guide for the plugin:<br>
<br>
<a href='http://code.google.com/eclipse/docs/getting_started.html'>http://code.google.com/eclipse/docs/getting_started.html</a>

###############################################################<br>
<h2>Database</h2>

Cubist instructions to setting up phpMyAdmin and MySQL:<br>
<a href='http://cubist.cs.washington.edu/doc/mysql/administrators/'>http://cubist.cs.washington.edu/doc/mysql/administrators/</a>

Login to phpMyAdmin.<br>
<br>
Create a Database<br>
Under MySQL localhost, type in a name for your database under Create new database and press Create.<br>
<br>
cd classroom-presenter/DB<br>
<br>
<code>mysql -p -h cubist.cs.washington.edu -u &lt;username&gt; &lt;databaseName&gt; &lt; DropScript.sql</code>
<blockquote>- If you need to drop your tables first</blockquote>

<code>mysql -p -h cubist.cs.washington.edu -u &lt;username&gt; &lt;databaseName&gt; &lt; CreateScript.sql</code>

<code>mysql -p -h cubist.cs.washington.edu -u &lt;username&gt; &lt;databaseName&gt;</code>

To show all tables in your DB: show tables;<br>
<br>
In order to make your code talk to your own database, please change the credentials in Incognito/db_credentials.php<br>
<br>
If you want to change the testing db to your own testing db, please change the credentials in /db_credentials.php<br>
<br>
###############################################################<br>
<h2>Running Incognito Locally</h2>

In the root folder of your cubist account, run this command:<br>
cp -r /path_to/classroom-presenter www/<br>
<br>
Now u can go to<br>
<a href='http://cubist.cs.washington.edu/~'>http://cubist.cs.washington.edu/~</a>

<username>

/Incognito/login.php<br>
<br>
###############################################################<br>
<br>
<h2>Mercurial</h2>
Here is a <a href='http://mercurial.selenic.com/wiki/UnderstandingMercurial'>guide</a> for how to use Mercurial.<br>
<br>
<b>Step-by-Steps:</b>
<blockquote>- go to <a href='http://code.google.com/p/classroom-presenter/source/checkout'>this link</a> and run the command shown where you want the source to be. <b>Make sure you are logged into your gmail account</b>
- In your home directory add the file ".hgrc" inside put the following text:<br>
<pre><code>[ui]<br>
username=first_name last_name&lt;_your gmail username_@gmail.com&gt;<br>
verbose=True<br>
</code></pre></blockquote>

When you want to update from the overall repos: hg fetch<br>
<br>
When you want to commit to the overall repos: hg commit; hg push<br>
<br>
hg commit: just commits to your own repos.<br>
<br>
When you push, you have to input your password. THIS IS NOT YOUR GMAIL PASSWORD. Look in your google code, and check your generated password.<br>
<br>
Please refer to:<br>
<br>
<a href='http://www.cs.washington.edu/education/courses/cse403/11sp/lectures/lecture04-version-control.pdf'><img src='https://lh3.googleusercontent.com/_4yreu12cTb4/TbdAaj5RCJI/AAAAAAAAFDg/nd4lkGzWv0s/distributed_vcs.png' /></a>

<h3>Merging and Branching</h3>

If you want to see the difference between your local and your repos: hg status<br>
<br>
If you want to see which heads there are in the repos to merge with do: hg head<br>
<br>
You will get something like this:<br>
<br>
<pre><code>changeset:   24:f4756808a6e8<br>
tag:         tip<br>
parent:      23:627fd23c7fff<br>
parent:      19:79acb65c3880<br>
user:        shenama.smd@gmail.com<br>
date:        Fri Apr 29 15:37:58 2011 -0700<br>
summary:     merging so that there is only one tip/head<br>
</code></pre>

"Changeset"--the number "24" indicates which revision the head is.<br>
<br>
You will need to merge with a certain head to be able to push if there are multiple heads, if there is only one head, it will automatically merge with that one.<br>
<br>
<h3>Adding a New Folder to Mercurial</h3>

touch new_folder/.empty<br>
hg add new_folder/.empty<br>
<br>
<h3>Pushing without Password</h3>
<ol><li>Go to the root dir of the project<br>
</li><li>cd .hg<br>
</li><li>vim hgrc<br>
</li><li>you will see something like:<br>
<pre><code>default = https://shenama.smd@class........................<br>
</code></pre>
instead try:<br>
<pre><code>default = https://shenama.smd:Qtdn384Wf@class........................<br>
</code></pre>
"Qtdn384Wf"  being your password.</li></ol>

###############################################################<br>
<h2>YUI</h2>
Home Page for <a href='http://developer.yahoo.com/yui/'>YUI</a>

###############################################################<br>
<h2>JavaScript</h2>
Online W3C schools <a href='http://www.w3schools.com/js/default.asp'>tutorial</a>

###############################################################<br>
<h2>JQuery</h2>
jQuery is a fast and concise <a href='http://jquery.com/'>JavaScript Library</a> that simplifies HTML document traversing, event handling, animating, and Ajax interactions for rapid web development. jQuery is designed to change the way that you write JavaScript.<br>
<br>
Download <a href='http://code.jquery.com/jquery-1.5.2.js'>here</a>. (Save as...)<br>
<br>
###############################################################<br>
<h2>UML Editor</h2>
We found that violet is a free UML editor and it seems to work pretty well. You can find it here:<br>
<br>
Violet <a href='http://sourceforge.net/projects/violet/'>http://sourceforge.net/projects/violet/</a>.<br>
<br>
###############################################################<br>
<h2>Visio</h2>

Download Visio, using your CS account.<br>
<a href='http://msdn.e-academy.com/elms/Storefront/Home.aspx?campus=washington_cs'>http://msdn.e-academy.com/elms/Storefront/Home.aspx?campus=washington_cs</a>

Tutorial for Diagrams: <a href='http://www.visualcase.com/tutorials/uml-tutorial.htm'>Follow Link</a>

<h2>Unit Tests</h2>
We will be using jsUnit for JavaScript and phpUnit for PHP.<br>
<br>
<a href='http://code.google.com/p/classroom-presenter/wiki/RunningTests'>Tutorial</a>