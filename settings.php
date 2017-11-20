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
?>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="newstyle.css">
<meta HTTP-EQUIV="refresh" CONTENT="300;URL=logout.php">
</head>
<body>
<h1 style="text-align: center;">Admin Panel</h1>
<div id="blueLink">
<a href="logout.php">Logout</a>&ensp;
<a href="options.php">Home</a><hr>
</div>
<p>You can change simple settings about this admin-panel below:</p><br>
<a href="themes.php"><p class="server">THEMES</p></a>

</body>
</html>
