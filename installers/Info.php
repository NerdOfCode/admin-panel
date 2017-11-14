<!Doctype Html>
<?php
session_start();
$status = $_SESSION['status'];
if($status == "1"){
	if($_SESSION['logged_in']=="1"){
		echo "<p style=\"color:red;\"><b>You are already logged in!!!</b></p>";
		$_SESSION['logged_in']="0";
}}else if($status != "1"){
        header("Location: /404.php");}
include "/user.php";
?>
<html>
<head>
<title>Info</title>
<link rel="stylesheet" type="text/css" href="/newstyle.css">
</head>
<body>
<h1 style="text-align: center;">Info</h1>
<p> This is NOT an installer, but this really helps to troubleshoot installer errors.</p>
<div id="blueLink">
<a href="/options.php">Home</a>
</div>
<?php
phpinfo();
?>

</body>


</html>
