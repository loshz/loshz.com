#!/usr/bin/env bash

set -eo pipefail

# <p> -> &lt;p&gt;
sed -i 's/<p>/\&lt\;p\&gt\;/g' index.xml

# </p> -> &lt;/p&gt;
sed -i 's/<\/p>/\&lt\;\/p\&gt\;/g' index.xml

# <ul> -> &lt;ul&gt;
sed -i 's/<ul>/\&lt\;ul\&gt\;/g' index.xml

# </ul> -> &lt;/ul&gt;
sed -i 's/<\/ul>/\&lt\;\/ul\&gt\;/g' index.xml

# <li> -> &lt;li&gt;
sed -i 's/<li>/\&lt\;li\&gt\;/g' index.xml

# </li> -> &lt;/li&gt;
sed -i 's/<\/li>/\&lt\;\/li\&gt\;/g' index.xml

# <h3> -> &lt;h3&gt;
sed -i 's/<h3>/\&lt\;h3\&gt\;/g' index.xml

# </h3> -> &lt;/h3&gt;
sed -i 's/<\/h3>/\&lt\;\/h3\&gt\;/g' index.xml

# <a href=" -> &lt;a href=&quot;
sed -i 's/<a\ href\=\"/\&lt\;a\ href\=\&quot\;/g' index.xml

# </a> -> &lt;/a&gt;
sed -i 's/<\/a>/\&lt\;\/a\&gt\;/g' index.xml

# <img src=" -> &lt;img src=&quot;
sed -i 's/<img\ src\=\"/\&lt\;img\ src\=\&quot\;/g' index.xml

# title=" -> title=&quot;
sed -i 's/title\=\"/title\=\&quot\;/g' index.xml

# Manual intervention:
# - Closing href tags '" />'
# - Some quote marks: "
