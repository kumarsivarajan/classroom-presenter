# jsUnit Tests #

Build.xml is in testing/jsunit.

After you write your test, you want to add your test to the build.xml. You do this by making a new target (One target for each test file):
```
<target name="standalone_test" description="">
 <junit showoutput="true" haltonerror="false" haltonfailure="false">
  <formatter type="plain" usefile="false"/>
  <classpath refid="classpath"/>
  <sysproperty key="java.util.logging.config.file" value="${loggingPropertiesFile}"/>
  <sysproperty key="browserFileNames" value="${browserFileNames}"/>
  <sysproperty key="description" value="${description}"/>
  <sysproperty key="closeBrowsersAfterTestRuns" value="${closeBrowsersAfterTestRuns}"/>
  <sysproperty key="logsDirectory" value="${logsDirectory}"/>
  <sysproperty key="port" value="${port}"/>
  <sysproperty key="resourceBase" value="."/>
  <sysproperty key="timeoutSeconds" value="${timeoutSeconds}"/>
  <sysproperty key="url" value="file:///homes/cubist/ashen/www/testing/jsunit/testRunner.html?testPage=file:///homes/cubist/ashen/www/testing/jsunit/testTesting.html"/>
  <test name="net.jsunit.StandaloneTest"/>
 </junit>
</target>
```

Where the url is first the testRunner.html that takes the testing file as a parameter.

Once you have all your targets in place make another target like so:

```
<target name="TestSuite1" depends="test1, test2, test3"/>
```

This way when you want to run a specific test suite, or group of tests, you can just run:

```
ant TestSuite1
```


# phpUnit Tests #

Build.xml is in testing/phpunit.

After you write your test, you want to add your test to the build.xml. You do this by making a new target (One target for each test file):
```

 <target name="Test1">
   <exec dir=".." executable="phpunit" failonerror="true">
      <arg line="testTesting.php" />
        </exec>
         </target>
```

Where the dir is where your test is relative to the current directory and arg line is the test file.

Once you have all your targets in place make another target like so:

```
 <target name="TestSuite1" depends="Test1"/>
```

This way when you want to run a specific test suite, or group of tests, you can just run:

```
ant TestSuite1
```