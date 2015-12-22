![https://lh5.googleusercontent.com/_4yreu12cTb4/Tczk4QZDSuI/AAAAAAAAFFM/n85BjFzXHTk/update.jpg](https://lh5.googleusercontent.com/_4yreu12cTb4/Tczk4QZDSuI/AAAAAAAAFFM/n85BjFzXHTk/update.jpg) 5/12
# Build Instructions #
There is a live site in place at [link](http://cubist.cs.washington.edu/~ashen/Incognito/login.php)

You will need valid CSE student login credentials to login as a student and valid CSE faculty login credentials to login as a student on the live site.

  * **You can get a copy of the source by running the following command in a terminal with mercurial installed:**

```
hg clone https://classroom-presenter.googlecode.com/hg/ classroom-presenter
```

  * **Once this is done you will want to change the .htacess files in both the Incognito/student folder and Incognito/instr folder to what you want your authentication to be.**
    * As of now only valid CSE students can log into the student pages and valid CSE faculty can log into the instructor pages.
    * If you want to have access to these pages regardless you can add yourself to the list. [more help on this](http://www.washington.edu/itconnect/web/publishing/uwnetid.html#steps)

  * **Now you need to set up the database.**

Log in to phpMyAdmin.
Create a database on phpMyAdmin with the name <database name>.
Log in to cubist, and run the following commands:

```
cd classroom-presenter/DB

mysql -p -h cubist.cs.washington.edu -u <your phpmyadmin username> < “CREATE DATABASE <database name>”

mysql -p -h cubist.cs.washington.edu -u <your phpmyadmin username> <databaseName> < DropScript.sql

mysql -p -h cubist.cs.washington.edu -u <your phpmyadmin usernam> <databaseName> < CreateScript.sql
```

To populate the database with sample data:

```
mysql -p -h cubist.cs.washington.edu -u <your phpmyadmin username> <databaseName> < PopulateScript.sql

```

  * **At this point you have all the components for a working website**

### This is critical ###
**Note: You need to update all of the db\_credentials.php scripts to your database name & password.**

The scripts are in the following directories:

/Incognito/instr/scripts/db\_credentials.php

/Incognito/students/scripts/db\_credentials.php


```
 $username = "<your name>";
 $password = "<db password>";
 $db_name = "<db_name>";
```



Related Links:
  * [Known Issues](http://code.google.com/p/classroom-presenter/issues/list) : These issues include both fixed issues and issues that are not fixed.
  * [Tests](http://code.google.com/p/classroom-presenter/w/edit/RunningTests) : In order to run tests you may need extra components installed.

![https://lh5.googleusercontent.com/_4yreu12cTb4/TczlBmfevKI/AAAAAAAAFFQ/VVFRDEhk8QU/end.jpg](https://lh5.googleusercontent.com/_4yreu12cTb4/TczlBmfevKI/AAAAAAAAFFQ/VVFRDEhk8QU/end.jpg)

# Build Instructions (ZFR) #
In order for developers to gain access to Incognito’s source code, they must first have access to a machine with Mercurial installed and have access to our Google Code project.
**Once this is done, the source code can be downloaded using the following command:**

```
hg clone https://<gmail_account_name>@classroom-presenter.googlecode.com/hg/ classroom-presenter
```
This command will download our source code into the developer’s current directory and place the code into a folder named classroom-presenter.

**Then initialized the DB**
Creating a database:
Log in to phpMyAdmin.
Create a database on phpMyAdmin.
Log in to cubist, and run the following commands:
```
cd classroom-presenter/DB
mysql -p -h cubist.cs.washington.edu -u <username> < “CREATE DATABASE <name>” >
mysql -p -h cubist.cs.washington.edu -u <username> <databaseName> < DropScript.sql
mysql -p -h cubist.cs.washington.edu -u <username> <databaseName> < CreateScript.sql
```
To populate the database with sample data:
```
mysql -p -h cubist.cs.washington.edu -u <username> <databaseName> PopulateScript.sql 
```