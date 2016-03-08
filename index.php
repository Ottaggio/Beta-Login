<?php
ob_start();
$codes = explode("\n", file_get_contents("codes.inc") );
if('POST'==getenv('REQUEST_METHOD') )
	if(isset($_POST['code'])&&is_string($_POST['code'])&& false !== array_search($_POST['code'],$codes) )
		header("Location: http://YOURSERVERLINK/register/?c=" . $_POST['code']);
	else
		echo "Incorrect Code!";

?>
<html>
<head>
	<title>Beta | YOURSERVERNAME</title>
</head>
<body background="background.jpg">
<br>
</br>
<center><img src="betahat.png" width="213" height="249"></center>
<center><form method="POST" action="index.php"><strong>Please, Input Your beta code:</strong><br>
<input type="text" name="code" value="" placeholder="Code"><br>
<input type="submit" name="submit"></center>
<center><font color="white "face="Burbank Big Regular">Beta Login create for Ottaggio!</font><center>
</html>