/*
 *  Licensed to the Apache Software Foundation (ASF) under one or more
 *  contributor license agreements.  See the NOTICE file distributed with
 *  this work for additional information regarding copyright ownership.
 *  The ASF licenses this file to You under the Apache License, Version 2.0
 *  (the "License"); you may not use this file except in compliance with
 *  the License.  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 *
 */

package org.apache.tools.ant.types.selectors;

import java.io.File;
import java.util.Enumeration;

/**
 * This selector has a collection of other selectors. All of those selectors
 * must refuse to select a file before the file is considered selected by
 * this selector.
 *
 * @since 1.5
 */
public class NoneSelector extends BaseSelectorContainer {

    /**
     * Default constructor.
     */
    public NoneSelector() {
    }

    /**
     * @return a string representation of the selector
     */
    public String toString() {
        StringBuffer buf = new StringBuffer();
        if (hasSelectors()) {
            buf.append("{noneselect: ");
            buf.append(super.toString());
            buf.append("}");
        }
        return buf.toString();
    }

    /**
     * Returns true (the file is selected) only if all other selectors
     * agree that the file should not be selected.
     *
     * @param basedir the base directory the scan is being done from
     * @param filename is the name of the file to check
     * @param file is a java.io.File object for the filename that the selector
     * can use
     * @return whether the file should be selected or not
     */
    public boolean isSelected(File basedir, String filename, File file) {
        validate();
        Enumeration e = selectorElements();
        boolean result;

        while (e.hasMoreElements()) {
            result = ((FileSelector) e.nextElement()).isSelected(basedir,
                    filename, file);
            if (result) {
                return false;
            }
        }
        return true;
    }

}

