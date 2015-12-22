Original Docs: [ZFR Documentation](https://docs.google.com/document/d/1mosj3M49bM59EJUN6ZwUFUD2Mcuq44Z79OyToJjWxos/edit?hl=en&authkey=CIi83aQG)

  * [User Documentation](http://code.google.com/p/classroom-presenter/wiki/UserDocumentation?ts=1305279321&updated=UserDocumentation#Documentation) : Documentation for the end user on how to use the application.
  * [Build Instructions](http://code.google.com/p/classroom-presenter/wiki/BuildInstructions#Build_Instructions_(ZFR)) : How to obtain and get a running copy of the website up.
  * [Bug reporting](http://code.google.com/p/classroom-presenter/wiki/BugReporting?ts=1305280829&updated=BugReporting)
  * ~~Pushing Incognito Live: The project will be constantly validated by Hudson. Once Hudson validates the project, Hudson pushes the build to production.~~
![https://lh5.googleusercontent.com/_4yreu12cTb4/Tczk4QZDSuI/AAAAAAAAFFM/n85BjFzXHTk/update.jpg](https://lh5.googleusercontent.com/_4yreu12cTb4/Tczk4QZDSuI/AAAAAAAAFFM/n85BjFzXHTk/update.jpg)
    * Pushing Incognito Live: To push live the Pm will validate that the Hudson build is successful and run through all of the manual tests before pushing live.
![https://lh5.googleusercontent.com/_4yreu12cTb4/TczlBmfevKI/AAAAAAAAFFQ/VVFRDEhk8QU/end.jpg](https://lh5.googleusercontent.com/_4yreu12cTb4/TczlBmfevKI/AAAAAAAAFFQ/VVFRDEhk8QU/end.jpg)
  * Release Process:
> After extensive testing we will plan on updating the live version of Incognito. However, before such a release is done we will go through an extensive testing process to ensure that our updated version is not a step down from the current version of Incognito. This will also require that every developer merges their local copy with the global, stable copy. The overall process will contain some of these key steps:
    * Merging local copies of Incognito
    * Uploading to an isolated testing folder that is locked from the public where a developer can perform tests to verify correctness
    * Fixing the resulting bugs from the tests
    * Release the updated version of Incognito to the public

> Note that many of these tasks will be done on a daily basis, but releasing new versions of Incognito will be done only when we have a stable release with significant upgrades over the current version. In addition, we will measure “significant upgrades” by the quality of the upgrade and the amount of new functionality/improvement over old functionality that a new release provides. This will process will minimize the number of buggy releases and prevent frequent updates.

  * [Issue Tracking](http://code.google.com/p/classroom-presenter/wiki/IssueTracking)