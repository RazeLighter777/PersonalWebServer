
<?php
$captchaSecretCode="6LcizFYUAAAAAKxkxYwQa8QF7F5IAsvZ_XoDjUEI";

$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$captchaSecretCode."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

if($response['success'] == true)
{
    echo 'Submission success!';
}else{
    echo 'Submission Failed. Did you forget to do the captcha?';
}
?>
