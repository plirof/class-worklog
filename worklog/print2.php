<?php
/*/-------------------------------------------------------------------\
| Original Name : csvview.php |
| Author : Neil Maskell |
| Function : Reads a specified CSV file (Comma seperated) and |
| converts it into a readable HTML table. |
| |
| You could set up a html form with an input field |
| called filename. Then use csvview.php as the action. |
| |
| the reason cache is being disabled is because if you |
| update the csv file the cache doesnt realise and shows|
| an older version of the information. |
| |
| The CSV files should (and normally are) in the format:|
| field1,field2,filed3,filed4 |
| field1,field2,field3,field4 |
\-------------------------------------------------------------------/

*/
//
$filename = ""; // File to open. quote out this variable if you are using a form to link to this script.


/*
No cache!!
*/
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
// always modified
header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); // HTTP/1.0
/*
End of No cache
*/




function viewlog($filename) {
$fp = fopen($filename,"r");
$file = fread($fp,65535);
$replaced = eregi_replace(",", "<td>", $file);
$replaced2 = eregi_replace("\n", "<tr><td>", $replaced);
$replaced3 = eregi_replace("\r", "<tr><td>", $replaced2);
fclose($fp);

return $replaced3;
}
echo "<html><head><base href=\"./\"><title>CSV File Viewer</title></head><body bgcolor=silver>";
// Start the table definition of your choice
echo "<table border=0 bordercolor=black cellspacing=0 cellpadding=5 width=100% style='font-size:10pt'>";

echo viewlog($filename);
echo "</table></body></html>";
exit;
?>
Read more at http://codewalkers.com/c/a/File-Manipulation-Code/Simple-CSV-to-HTML-Table/#2RSzUa7CEpbDL0KF.99
