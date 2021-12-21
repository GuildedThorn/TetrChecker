# Hello There!

This is a name checking script for https://tetr.io/ written by me for a friend in PHP. The tetr API has literally no rate limiting so a proxy list will not be needed unless they see this and update it. :D


When you Install the php script you should have 3 files in your directory.

- script.php
- names.txt
- list.txt

To Start the script install php 8.0 and run php script.php while in the same directory as the script. This script does require linux to run as it uses SSL and sometime this throws a fit on Windows.

List.txt should be the file you chuck your name list into, it should have next line indenting like this:
```
Name1
Name2
Name3
```