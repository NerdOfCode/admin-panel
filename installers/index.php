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
<title>Installers</title>
<link rel="stylesheet" type="text/css" href="/newstyle.css">
</head>
<body>
<h1 style="text-align: center;">Installers</h1>
<div id="blueLink">
<a href="/options.php">Home</a>
<a href="/logout.php">Logout</a><hr>
</div>
<p>Here are the installers you have available: </p>

<?php
//From: https://stackoverflow.com/questions/5294266/how-to-write-a-php-coding-to-list-out-all-files-and-directories-as-links-to-them
$files = scandir('.');
//usort($files, 'strnatcasecmp');
sort($files); // this does the sorting
foreach($files as $file){
   if ($file != "." and $file !=".." and $file !=".index.php.swp" and $file !="index.php"){
     echo'<a href="$file"><p class="server">'.$file.'</p></a> ';
   }
}?>

<p class="footer">Version: <?php echo $version; ?></p>
</body>


</html>
