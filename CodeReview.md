## Code Review 5/24 ##

Formal report can be found  [here.](https://docs.google.com/document/d/14mDuxosklURHFI6ELMMG_e1ijnyI4hevjNNQ4xfs5uo/edit?hl=en_US&authkey=CKTwy4AJ)

| file | issues | change made |
|:-----|:-------|:------------|
|studentfeed.php|        |             |
|      | factor out the nav bars, top bottom | yes         |
|      | factor out yui scripting stuff and include|             |
|      | include comments in yui scripting and remove debugging stuff|             |
|      | remove states array|             |
|studentfeed.js|        |             |
|      | take out debug functions|             |
|      | remove tabbing|             |
| submit\_questions.php|        |             |
|      | issets | yes         |
|      | include db credentials instead of first block of db code| yes         |
|      | error check after every mysql\_query call| yes         |
|      |line 34 casting, neccessary?| yes         |
|      | close db connection| yes         |
|      |submit\_questions--> rename to submit\_questions\_feedback| yes         |
|studentfeed\_lookup questions|        |             |
|      |db credentials instead of block| yes         |
|      |error checking mysql query| yes         |
|      |factor out has voted for q and f. | yes         |
|      |close db connection| yes         |
|      |none branch is combo of all q and all f so change logic so that if allq or none and if allf and none.| yes         |
|      |`[`low priority`]` factor out sql strings to the top|             |
|      |`[`low priority`]` sprintf need semicolons|             |
|studenthome\_lookup\_questions|        |             |
|      |db credentials| yes         |
|      |close db connection| yes         |
|instructorfeed.php|        |             |
|      |more comments|             |
|      |rid of debugging stuff line 17|             |
|lookup questions.php|        |             |
|      |db credentials| yes         |
|      |query building|             |
|      |close connection| yes         |
|instructor free/multiple|        |             |
|      |combine these two into instructorsurvey.php|             |