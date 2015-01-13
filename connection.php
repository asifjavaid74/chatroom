<?php
session_start();

$con=mysql_connect("localhost","root","");
if($con)
{

	mysql_select_db("chatroom",$con) or die ("Connection is not established").mysql_error();
	}
	else
   {
      echo "connection to server is not established ".mysql_error();
   }
   
?>
