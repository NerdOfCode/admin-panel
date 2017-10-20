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
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 style="text-align: center;">Admin Panel</h1>
<a href="logout.php">Logout</a>&ensp;
<a href="options.php">Home</a><hr>
<p>Below is version v.000001 of admin panel by NerdOfCode</p>
<p>You can execute shell commands seperately from Mysql commands</p>
<form action="" name="query" id="query" method="post">
        DBNAM: &nbsp;&nbsp;&nbsp;<input type="text" id="mysql_get" name="mysql_get" placeholder="ex: custom" value="<?php echo $_SESSION[udb];?>"></input><br><br>
	HOST : &ensp;&ensp;&ensp;<input type="text" id="host" name="host" placeholder="localhost" value="<?php echo $_SESSION['host'];?>"></input><br><br>
	USER : &nbsp;&ensp;&ensp;&nbsp;<input type="text" id="username" name="username" value="<?php echo $_SESSION['mysql_user'];?>"></input><br><br>
	PASS : &ensp;&nbsp;&ensp;&ensp;<input type="password" id="password" name="password" value="<?php echo $_SESSION['mysql_pass'];?>"></input></br><br>
	QUERY: &ensp;&nbsp;&nbsp;<input type="text" id="myquery" name="myquery" placeholder="SELECT * FROM test;" value="<?php echo $_SESSION['query'];?>"></input><br><br>
        <button type="Submit" value="Submit">Submit</button>

</form>

</body>

<?php
$udb=$_POST['mysql_get'];//Database
$user=$_POST['username'];
$pass=$_POST['password'];
$query=$_POST['myquery'];//Commands
$host=$_POST['host'];
//Set all current values as session variables below
$_SESSION['saved_info']="1";$_SESSION['udb']="$udb";$_SESSION['mysql_user']="$user";$_SESSION['mysql_pass']="$pass";$_SESSION['query']="$query";$_SESSION['host']="$host";
$db = mysqli_connect($host,$user,$pass,$udb) or die("<p style=\"color:red;\"><b>Error: </b> connection to MySQL failed. Please re-enter information and try again.</p>");
mysqli_query($db, $query) or die("Unable to access MYSQL");
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
$column=$row['password'];
echo "<b>Query Result: $column</b><br>";
$mysqli_close($db);
?>
</html>
