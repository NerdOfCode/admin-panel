<?php
include "user.php";
$user_logged=$_SESSION['user'];
$query=$_SESSION['run_seperate'];
$db = mysqli_connect('localhost',$user,$pass,$database) or die("<p style=\"color:red;\"><b>Error: </b> connection to MySQL failed. Please re-enter information and try again.</p>");
$new_query="UPDATE $table SET commands='$query' WHERE name='$user_logged'";
mysqli_query($db, $new_query);
$mysqli_close($db);
?>
