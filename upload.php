<?php
include "connection.php";
if(!is_dir("recordings")){
	$res = mkdir("recordings",0777); 
}

// pull the raw binary data from the POST array
$data = substr($_POST['data'], strpos($_POST['data'], ",") + 1);
// decode it
$decodedData = base64_decode($data);
// print out the raw data, 
//echo ($decodedData);
$filename = urldecode($_POST['fname']);
$filename='record/'.$filename;
$myname = $_POST['myname'];
$rec= $_POST['rec'];
// write the data out to the file
mysql_query("insert into chatting values ('','$myname','$rec','$filename','unread')");
$fp = fopen($filename, 'wb');
fwrite($fp, $decodedData);
fclose($fp);
?>
