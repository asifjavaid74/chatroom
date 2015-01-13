<?php
	include "connection.php";

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.ppp
{
height:70;
}
.style2 {
	font-size: 24px;
	color: #0033FF;
}
.style3 {
	color: #FFFFFF;
	font-size: 24px;
}
.style5 {color: #FFFFFF}
    /* Example Styles for Demo */
    .etabs { margin: 0; padding: 0; }
    .tab { display: inline-block; zoom:1; *display:inline; background:#00CCFF; border: solid 1px #999; border-bottom: none; -moz-border-radius: 4px 4px 0 0; -webkit-border-radius: 4px 4px 0 0; }
    .tab a { font-size: 14px; line-height: 2em; display: block; padding: 0 10px; outline: none; }
    .tab a:hover { text-decoration: underline; }
    .tab.active { background: #fff; padding-top: 6px; position: relative; top: 1px; border-color: #666; }
    .tab a.active { font-weight: bold; }
    .tab-container .panel-container { background: #fff; border: solid #666 1px; padding: 10px; -moz-border-radius: 0 4px 4px 4px; -webkit-border-radius: 0 4px 4px 4px; }
    .panel-container { margin-bottom: 10px; }
  </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <script src="jquery.min.js"></script>
 <script src="logincal.js"></script>
 <script src="chat.js"></script>

 

  <script src="lib/jquery.easytabs.min.js" type="text/javascript"></script>
  
   <script type="text/javascript">
    $(document).ready( function() {
      $('#tab-container').easytabs();
    });
  </script>
</head>

<body>
<table  width="100%" height="606" border="0" align="center" bordercolor="#00CCFF" bgcolor="#FF9966" style="border-collapse:collapse">
  <tr bgcolor="#FFFFFF">
    <td height="61"><div align="center"><img src="images/chit_chat_logo.jpg" width="555" height="118" alt="Header" /></div></td>
  </tr>
  <tr>
  
  <input type="text" id="hnick" name="hnick"/>
  <input type="text" id="hfnick" name="hfnick"/>
    <td><table width="95%" height="505" border="0" align="center" style="border-collapse:collapse">
      <tr>
        <td height="368" colspan="6"><div style="background-color:White" >
		<!--  Chatting Area --> 
		<div id="tab-container" class='tab-container'>
 <ul class='etabs'>
  
 
 </ul>
 <div class='panel-container'>
  
  
   <?php
 
		 echo "<div class='chattingArea' id='' style='position:relative; height:300px; overflow-y:auto;'>Welcome To Chat & Chat:  Developed By Sadia Ijaz & Samina Kausar </div>";
   ?>
  
  </div>
		</div>
		<!-- End Chatting Area-->
		
		</td>
        <td height="368">
        <div style="position:relative; height:350px; overflow-y:auto;background:#FF9966;">
		<table width="95%" border="0" id="tblExist">
		<tr>
			<td><span class="style5">NickName </span></td>
			</tr>
	
</table>
</div>
		</td>
      </tr>
      <tr bgcolor="#D2E9FF">
        <td width="24" height="40">&nbsp;</td>
        <td width="131">
		<input type="hidden" id="offlineName"  />
		<select name="lstStatus" id="lstStatus" style="width:80px">
          <option>Online</option>
          <option>Offline</option>
        </select></td>
        <td width="21"></td>
        <td width="43"><img src="2.jpg" alt="smile" width="31" height="38" id='emotions'/></td>
        <td width="6">&nbsp;</td>
        <td width="568"><div id='emotionsDiv' style="display:none;">
		<img class="emotionpic" id="1.png" src="emotions/1.png" width="30" height="30" />
		<img class="emotionpic" id="2.png" src="emotions/2.png" width="30" height="30"/>
		<img class="emotionpic" id="3.png" src="emotions/3.png" width="30" height="30"/>
		<img class="emotionpic" id="4.png" src="emotions/4.png" width="30" height="30"/>
		<img class="emotionpic" id="5.png" src="emotions/5.png" width="30" height="30"/>
		<img class="emotionpic" id="6.png" src="emotions/6.png" width="30" height="30"/>
		<img class="emotionpic" id="7.png" src="emotions/7.png" width="30" height="30"/>
		<img class="emotionpic" id="8.jpg" src="emotions/8.jpg" width="30" height="30"/>
		<img class="emotionpic" id="9.jpg" src="emotions/9.jpg" width="30" height="30"/>
		<img class="emotionpic" id="10.jpg" src="emotions/10.jpg" width="30" height="30"/>
		<img class="emotionpic" id="11.jpg" src="emotions/11.jpg" width="30" height="30"/>
		<img class="emotionpic" id="12.jpg" src="emotions/12.jpg" width="30" height="30"/>
		<img class="emotionpic" id="13.jpg" src="emotions/13.jpg" width="30" height="30"/>
		<img class="emotionpic" id="14.jpg" src="emotions/14.jpg" width="30" height="30"/>
		<img class="emotionpic" id="15.jpg" src="emotions/15.jpg" width="30" height="30"/>
		<img class="emotionpic" id="16.gif" src="emotions/16.gif" width="30" height="30" />
		<img class="emotionpic" id="17.jpg"src="emotions/17.jpg" width="30" height="30"/>
		<img src="emotions/18.gif" name="em18" width="30" height="30" class="emotionpic" id="18.gif" />
		<img class="emotionpic" id="19.png" src="emotions/19.png" width="30" height="30" />
		<img class="emotionpic" id="20.gif" src="emotions/20.gif" width="30" height="30" />
		
				
		</div></td>
        <td width="201">&nbsp;</td>
      </tr>
      <tr>
        <td height="82" colspan="7" bgcolor="#FFFFFF">  
          <table width="100%" border="0">
            <tr>
              <td><textarea style="width:98%;" name="txtMessage" id="txtMessage"></textarea></td>
              </tr>
          </table></td>
      </tr>
      
    </table></td>
  </tr>
</table>

<div style="position:absolute; width:300px; height:200px; background:#FF6666; left:50%; top:50%; margin-left:-150px; margin-top:-100px;" id="nickDiv">
<table width="100%" border="0">
  <tr>
    <td height="47" colspan="3" bgcolor="#009999"><span class="style3">Enter Nick Name </span></td>
    </tr>
  <tr>
    <td width="10%">&nbsp;</td>
    <td width="27%">&nbsp;</td>
    <td width="63%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nick Name </td>
    <td><input name="NickName" type="text" id="NickName" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name="btnSubmitNick" type="button" id="btnSubmitNick" value="Submit" /></td>
  </tr>
</table>

</div>
</body>
</html>
