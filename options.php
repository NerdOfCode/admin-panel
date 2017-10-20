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
include "user.php";
?>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 style="text-align: center;">Admin Panel</h1>
<a href="logout.php">Logout</a><hr>
<p>You are currently running version <?php echo $version; ?></p>
<p>Below you will find shortcuts to a number of settings meant to replace SSH</p>

<a href="shell.php"><p class="server">EXECUTE SHELL</p></a>
<a href="mysql_exec.php"><p class="server">EXECUTE MYSQL</p></a>
</body>


</html>
