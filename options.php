<!Doctype Html>
<?php
session_start();
$status = $_SESSION['status'];
if($status == "1"){
}else if($status != "1"){
        header("Location: /404.php");}

?>
<html>
<head>
<title>Admin Panel</title>
</head>
<body>
<p>Below is version v.000001 of admin panel by NerdOfCode</p>
<p>You can execute shell commands seperately from Mysql commands</p>
<form action="" name="query" id="query" method="post">
        SHELL: &nbsp;&nbsp;&ensp;&nbsp;&nbsp;<input type="text" id="query_box" name="query_box" placeholder="Ex: whoami"></input><br><br>
        DBNAM: &nbsp;&nbsp;&nbsp;<input type="text" id="mysql_get" name="mysql_get" placeholder="ex: custom"></input><br><br>
	HOST : &ensp;&ensp;&ensp;<input type="text" id="host" name="host" placeholder="localhost"></input><br><br>
	USER : &nbsp;&ensp;&ensp;&nbsp;<input type="text" id="user" name="user"></input><br><br>
	PASS : &ensp;&nbsp;&ensp;&ensp;<input type="password" id="pass" name="pass"></input></br><br>
	QUERY: &ensp;&nbsp;&nbsp;<input type="text" id="myquery" name="myquery" placeholder="SELECT * FROM test;"></input><br><br>
        <button type="Submit" value="Submit">Submit</button>
</form>
</body>

<?php
$db=$_POST['mysql_get'];//Database
$user=$_POST['user'];
$pass=$_POST['pass'];
$query=$_POST['myquery'];//Commands
$host=$_POST['host'];

$mysqli = mysqli_connect($host,$user,$pass,$db) or die("Unable to connect to MYSQL");
mysqli_query($mysqli,"SELECT * FROM users;");
$mysqli_close($db);



$cwd=getcwd();
echo "<br>Current directory: $cwd<br>";
$shell = $_POST['query_box'];
$run = exec("$shell");
echo "<br><b>Output: $run</b><br>";
?>


</html>
