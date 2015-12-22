# Hudson Setup #

**Need**
Your own repository with the source code.
[Hudson.war](http://hudson-ci.org/)

# Details #

1. Download [Hudson.war](http://hudson-ci.org/).

2. Run
```
 java -jar hudson.war httpPort=<your port> ajpPort=-1
```

3. Setup Hudson:

  1. Select "Manage Hudson" from the left menu column.

> 2. Select "Manage Plugins".

> 3. Go to the "Available" tab and check the "Mercurial Plugin" under the "Source Code Management" category.

> 4. Click "Install" on the very bottom-right of the page.

> 5. Click "Restart When No Jobs Are Running" and wait for the main Hudson page to come back up.

4. Create a new Job and point the build targets to the build.xml files in the testing folder.