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