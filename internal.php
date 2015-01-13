<?php
	include "connection.php";
	
	if (isset ($_GET['message']))
	{
		$message = $_GET['message'];
		$sender =  $_GET['sender'];
		$reciver=$_GET['reciever'];
		mysql_query("insert into chatting values ('','$sender','$reciver','$message','unread')");
	}

	if(isset($_REQUEST['login']))
	{
		$nick=$_REQUEST['login'];
		$fnick = $_REQUEST['fnick'];
		
		$time=time();
		mysql_query("update userrecord set LoginTime='$time' where NickName='$nick'");
		$time= $time-6;
		mysql_query("delete from userrecord where  $time>LoginTime");
		$table = mysql_query("select * from userrecord where NickName <> '$nick'");
		$str='';
		$links = '';
		$chattingDiv = '';
		mysql_query("update chatting set status='Read' where RecieverName='$nick' and SenderName='$fnick'");
		
		while ($row = mysql_fetch_array($table))
		{
		    $friendname = $row[0];
			$unreadMessage = mysql_query ("select * from chatting where SenderName='$friendname' and status='unread' and RecieverName='$nick'");
			if (mysql_num_rows($unreadMessage)==0)
			{
		    $str= $str."<tr class='nickrows' id='nkn".$row[0]."'><td>".$row[0]."</td></tr>";
			}
			else
			{
			$str= $str."<tr class='nickrows' id='nkn".$row[0]."' style='background:red;'><td>".$row[0]."</td></tr>";
			}
			
		}
		$table = mysql_query ("select * from chatting where (SenderName='$nick' and RecieverName='$fnick') or (SenderName='$fnick' and RecieverName='$nick')");
		$chatting ='';
		while ($row = mysql_fetch_array($table))
		{
			if (strpos($row['Chat'],".gif")>0 || strpos($row['Chat'],".jpg")>0 || strpos($row['Chat'],".png")>0)
			{
			 // $row['chat']=  str_replace("_",".",$row['chat']);
			   $chatting = $chatting .$row['SenderName'] . " : <img width='30' src='emotions/".$row['Chat']."' /><br/>";
			}
			else
			{
			  $chatting = $chatting .$row['SenderName'] . " : ".$row['Chat']."<br/>";
			}
		}
		
		echo json_encode(array("nickname" => $str, "chattingdiv"=>$chattingDiv,'Messages'=>$chatting));	
	}


	if(isset($_REQUEST['NickName']))
	{
		$nickname=$_REQUEST['NickName'];
		$table=mysql_query("select * from userrecord where NickName='$nickname'");
		if(mysql_num_rows($table)>0)
		{
			echo "Already Exist";
		}
		else
		{
		$time=time();
		if(mysql_query("insert into userrecord values('$nickname','$time')"))
		{
			echo "Data Insertion Successfully";
		}
		else
		{
		
			echo "Data Insertion Failed".mysql_error();
		}
		}
		
		
		
	}
	
	
?>