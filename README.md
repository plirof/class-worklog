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
flatfile.inc_1.2jmod006_190305_ignore_empty_lines.php



Bugs:
Bug: Τα κενά στο αρχείο δημιουργούν προβλήματα. Να αφαιρούνται... (FIXED in v1.2jmod006_190305)