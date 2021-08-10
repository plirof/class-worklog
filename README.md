# TEST with password protect 210810
1 file SCRIPT
http://www.zubrag.com/scripts/password-protect.php
http://www.zubrag.com/forum/index.php?topic=45.0
Adding logout link : http://www.zubrag.com/forum/index.php/topic,202.0.html 
ALTERNATIVE : http://www.zubrag.com/scripts/password-protect-advanced.php


Password protect your content with Web Page Password Protect by just adding one line of PHP code to your page source. Script will present user with password entry form, and will not let visitor see your private content without providing a password.
Multiple user accounts support, improved security, automatic logout, and manual logout feature.
Usage:
Save password_protect.php somewhere on your server
Update it with your desired password or login/password pair. Use any plain text editor to accomplish this step. Sample editors: Notepad (Windows) or vi (Unix).
Open script in your browser with "help" parameter to see the line of code to add to every page you would like to be password protected.
Example: password_protect.php?help

It will show you protection code to include into your pages. Sample protection code would look like this (yours will be different):
<?php include("/home/users/htdocs/security/password_protect.php"); ?>
Add that line of code to each php page you would like to protect at the very beginning of the page source (it must be the first line).
For example you want to protect page protect-me.php. Open it for editing, and add the protection string (see above on how to get the protection string) at the beginning. So resulting code would look like
<?php include("/home/users/htdocs/security/password_protect.php"); ?>
... here, at the second line starts your page code ...


# ------------_ORIGINAL readme.md txt---------------------



# class-worklog
latest version will be at : https://github.com/gamesedu/class-worklog

Keep track of each daily lesson/work activity in all your classes.

This is the electronic version of the log-book used in some schools to keep track of each days lesson.



Uses "flatfile_manager.zip"[Flat File Database Manager 1.2 ,http://www.zubrag.com/scripts/ for updates" give thanks to the original author.
notes:
worklog.def : here you define the fields of the simple flat file database used
worklog.txt : here all your entries are stored.


Instructions :
http://...../backup.php?name=worklog
will create a backup for the file names worklog.txt -> worklog_backup_170504.txt
(you must know the actual filemname of the storage - eg worklog.txt to actually work)



Changes:
- 210201 http://..../class-worklog/index.php?backup=true
- 1.2jmod11-201028_checkbox_show_submit show only when you check a checkbox
- 1.2jmod11-200109_isset_checks_instead_of_from_empty() to isset()
- 1.2jmod11-200108_submit_button option , edit.php , index.php=only view)
- 1.2jmod10-190410_sorting fix TEXTAREA show outside element if column name =Week (HARDCODED)
- 1.2jmod10-190409e_LISTWEEKSSCH
- 1.2jmod10-190408_$show_logical_header shows text in checkboxes (alt to freeze 1st row)
- 1.2jmod09-190320_sortablejs_sprintf
- 1.2jmod08-190319_shows_selected_&_class_name on list text
- 1.2jmod07-LISTQUARTER 190312
- 1.2jmod06-RTfilter 190305
- 1.2jmod05-Reat time client filter 190224a
- 1.2jmod04-link object type 190223a :
- Added red color to DELETE/MARK checkbox
- ver1.2jmod03-link object type 170716a



Bugs:
Bug: Τα κενά στο αρχείο δημιουργούν προβλήματα. Να αφαιρούνται... (FIXED in v1.2jmod006_190305)