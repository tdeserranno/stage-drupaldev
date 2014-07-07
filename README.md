#Version information
Drupal version = 7.28

#Modules
#####1. usersearch
status: working, export may need revision

The module provides a page where you can search for users of a Drupal site by username and/or mail address.
    
The module also provides an export of all users (except uid 1) to either a CSV file download, without pictures or to an exportfolder on the server itself with a JSON file together with a folder containing the profile pictures of the users.

#####2. usersearch_import
status: working, import may need revision

Import functionality to import users exported by usersearch JSON export
(export files need to be contained in a zip file)

#####3. contentexport
status: working

JSON export of all nodes of a given node type (selected via provided form).

Data and files are exported to a location on the server itself (public://export/).
A new directory is generated for each export (content type) each day (public://export/article\_07-07-2014).
Images are copied into subfolders based on their original directory tree under a main image directory (public://export/article\_07-07-2014/image/field/thumbnail).

#####4. contentimport
status: work in progress, needs to be changed to reflect latest changes in contentimport module.

Import functionality for contentexport module.

#Fixes
####03/07/2014
**Modules:**    contentexport, contentimport

**Problem:**    `field_read_fields()` function problem as described [here](https://www.drupal.org/node/1927588).

**Solution:**   To provide support for Drupal versions below 7.22 the field info is now being retrieved by a combination of the `field_info_instances()` and `field_info_field()` functions.
***
####04/07/2014
**Modules:**	contentexport

**Fixes:**	Taxonomy loading of a tid that doesn't exist was not handled correctly. Now when attempting to load a non-existing tid, the array element is set to NULL.

**Changes:**	Changed image file copy to copy to subdirectories instead of all into 1 directory. Subdirectories are based on original file uri.
***
####07/07/2014
**Modules:** contentexport

**Addition:** 	additional menu info (menu name, parent id) now provided

**Changes:** 	code reviewed and rewritten based on feedback
***
