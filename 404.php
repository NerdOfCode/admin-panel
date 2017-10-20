<?php
session_start();
if($_SESSION['status']=="1"){
	header("Location: /options/php");
	$_SESSION['logged_in']="1";
}
$ip=$_SERVER['REMOTE_ADDR'];
echo "The file you have tried to access is top secret and unfortuantely you do not have the clearance to access it...";
echo "Your IP has been reported: <b>$ip</b>";

?>
