#Version information
Drupal version = 7.28

#Modules
####usersearch (working, export may need revision)
***
1. Search: 
    The module provides a page where you can search for users of a Drupal site by username and/or mail address.

2. Export: 
    The module also provides an export of all users (except uid 1) to either a CSV file download, without pictures or to an     exportfolder on the server itself with a JSON file together with a folder containing the profile pictures of the users.

####usersearch_import (working, import may need revision)
***
Import functionality to import users exported by usersearch JSON export (export files need to be contained in a zip file.

####contentexport (work in progress)
***
JSON export of all nodes of a given node type (selected via provided form).

####contentimport (work in progress)
***
Import functionality for contentexport module.
