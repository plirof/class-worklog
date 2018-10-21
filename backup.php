<?php
echo "backing up<BR>";
print_r($_REQUEST);

$filename="noname";
$exists=false;
if ($filename=$_REQUEST["name"]){
	if (file_exists($filename.".txt")) {
		echo "<h3>EXISTS $filename.txt</h3>";
		$exists=true;
	}

}
//echo "<BR>DEBUG name=" . $_REQUEST["name"];
//if($exists) echo 'copy($filename.".txt",$filename."_backup_".date("Ymd").".txt")';
if($exists) echo copy($filename.".txt",$filename."_backup_".date("Ymd").".txt");
?> 