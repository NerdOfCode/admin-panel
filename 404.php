<?php
session_start();
if($_SESSION['status']=="1"){
	header("Location: /options.php");
	$_SESSION['logged_in']="1";
}
$ip=$_SERVER['REMOTE_ADDR'];
echo "The file you tried to access is protected and you dont have permission to view it... <br>";
echo "Your IP has been reported: <b>$ip<b>";

?>
