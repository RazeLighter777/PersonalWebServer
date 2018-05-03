
<?php
$captchaSecretCode="6LcizFYUAAAAAKxkxYwQa8QF7F5IAsvZ_XoDjUEI";

$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$captchaSecretCode."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

if($response['success'] == true)
{
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
		$ip = ip2long($_SERVER["REMOTE_ADDR"]);
		$cutmessage = substr($_POST["msg"],0,240);
		
		$sql = "INSERT INTO chat (ipaddr, message, posttime)
    VALUES (". $ip . ", \"". $cutmessage . "\", now())";
		$conn->exec($sql);
		echo "Message submitted.";
		
	}

}
else{
    echo 'Submission Failed. Did you forget to do the captcha?';
}
?>
