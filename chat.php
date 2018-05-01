<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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

	<!--- This script to open a file --->
	<script type="text/javascript">
            	//This event is called when the DOM is fully loaded
            	window.addEvent("domready",function(){
                //Creating a new AJAX request that will request 'test.csv' from the current directory
                var csvRequest = new Request({
                    url:"test.csv",
                    onSuccess:function(response){
                        //The response text is available in the 'response' variable
                        //Set the value of the textarea with the id 'csvResponse' to the response
                        $("csvResponse").value = response;
                    }
                }).send(); //Don't forget to send our request!
            });
	</script>


	</div>
        <div id="content_bottom"></div>
            
            <div id="footer"><h3><a href="http://www.bryantsmith.com">Credit for web template!</a></h3></div>
      </div>
   </div>
</body>
</html>
