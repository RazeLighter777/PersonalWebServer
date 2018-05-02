
<?php
$secretKey="6LcizFYUAAAAAKxkxYwQa8QF7F5IAsvZ_XoDjUEI";
if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
          print($captcha);
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $secretKey = "Put your secret key here";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
          echo $responseKeys["error-codes"];
        } else {
          echo '<h2>Thanks for posting comment.</h2>';
        }
?>
