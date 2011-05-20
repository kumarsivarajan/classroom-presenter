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
package org.apache.tools.ant.types.resources;

import java.util.Iterator;
import java.util.ArrayList;
import java.util.Collection;

/**
 * ResourceCollection that contains the first <code>count</code> elements of
 * another ResourceCollection, a la the UNIX head command.
 * @since Ant 1.7
 */
public class First extends SizeLimitCollection {

    /**
     * Take the first <code>count</code> elements.
     * @return a Collection of Resources.
     */
    protected Collection getCollection() {
        int ct = getValidCount();
        Iterator iter = getResourceCollection().iterator();
        ArrayList al = new ArrayList(ct);
        for (int i = 0; i < ct && iter.hasNext(); i++) {
            al.add(iter.next());
        }
        return al;
    }

}
