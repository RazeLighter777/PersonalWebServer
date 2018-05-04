<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>SLACKBOARD CHAT</title>
</head>

<body>
<div id="container">
		<div id="header">
		<h1>Slack<span class="off">Board</span></h1>
	<br>
            <marquee><h2>CHATROOM</h2></marquee>
        </div>   
        
        <div id="menu">
        	<ul>
		<li class="menuitem"><a href="index.php">Home</a></li>
		<li class="menuitem"><a href="games.php">Games</a></li>
                <li class="menuitem"><a href="forum.php">Forum</a></li>
                <li class="menuitem"><a href="chat.php">Live Chat</a></li>
                <li class="menuitem"><a href="memes.php">Memes</a></li>
                <li class="menuitem"><a href="downloads.php">Downloads</a></li>
              <li class="menuitem"><a href="information.php">Information</a></li>
            </ul>
        </div>
        
        <div id="leftmenu">

        <div id="leftmenu_top"></div>

				<div id="leftmenu_main">    
                
                <h3>Cool Sites</h3>
                <ul>
                    <li><a href="http://gen.lib.rus.ec/">Library Genisis</a></li>
                    <li><a href="http://reddit.com/r/dankmemes">/r/dankmemes</a></li>
                    <li><a href="http://reddit.com/r/deepfriedmemes">/r/deepfriedmemes</a></li>
                </ul>
</div>
                
                
              <div id="leftmenu_bottom"></div>
        </div>
        
        
        
        
		<div id="content">
        
        
        <div id="content_top"></div>
        <div id="content_main">
		<h3>Chat Room LIVE</h3>
		<div id="box">
<?php


$servername = "localhost";
$username = "webserver";
$password = "dbpass";
$dbname = "chatdb";	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
       	die("Connection failed: " . $conn->connect_error);
} else {

	$sql = "SELECT message,posttime FROM chat";
	$result = $conn->query($sql) or die(mysql_error());
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo $row["posttime"] . "ANON: " . $row["message"] . "<br><br>";
		}
	}


 	       
	
}





?>


		</div>
		<h4>Type Message Here:</h4>
	
<!---Message form--->
		<form action="handlechat.php" method="post">
		<label value="Message <240 characters" for="msg">
		<input type="text" name="msg" id="msg" placeholder="Message">
		<div class="g-recaptcha" data-sitekey="6LcizFYUAAAAAFDM5gnvYFIew7cnicXYb_G7Hft4"></div>
		</form>

	</div>
        <div id="content_bottom"></div>
            
            <div id="footer"><h3><a href="http://www.bryantsmith.com">Credit for web template!</a></h3></div>
      </div>
   </div>
</body>
</html>

