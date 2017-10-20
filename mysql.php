<?php
include "user.php";
$query=$_SESSION['run_seperate'];
$db = mysqli_connect('localhost',$user,$pass,$database) or die("<p style=\"color:red;\"><b>Error: </b> connection to MySQL failed. Please re-enter information and try again.</p>");
mysqli_query($db, $query) or die("Query failed");
$result = mysqli_query($db, $query);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
$stringArray = json_encode($row);
$stringArray = str_replace(",", "<br>", $stringArray);
$stringArray = str_replace(array('[', ']', '}', '"'), "", $stringArray);
$stringArray = str_replace("{", "<br>", $stringArray);
$stringArray = str_replace(":", ": ", $stringArray);
echo $stringArray;
$mysqli_close($db);
?>
