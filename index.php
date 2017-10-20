<!--  Developed by NerdOfCode -->
<!Doctype html>
<?php
session_start();
if($_SESSION['status']=="1"){
	header("Location: /options.php");
	$_SESSION['logged_in']="1";
}
?>
<html>
  <head>
    <title>Admin Panel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1 style="text-align:center;">Admin Panel</h1><hr>
    <form name="index" id="index" action="" method="post">
      Username:&ensp;<input type="text" name="UID" id="UID" required><br><br>
      Password:&ensp;<input type="password" name="passwd" id="passwd" required><br><br>
      <input type="submit" value="Submit" onClick=""">
    </form>
    
<script>
$(document).ready(function(){
	$('#form').submit(function(){
		$('#UID').fadeOut(500);
		$('#passwd').fadeOut(500);
})
});

var input = document.getElementById('UID');
input.focus();
input.select();

</script>
<p class="footer">By: <a href="https://github.com/NerdOfCode" target="_blank"><b>NerdOf</b>Code</a>, <a href="https://github.com/NerdOfLinux" target="_blank"><b>NerdOf</b>Linux</a> | <a href="https://github.com/NerdOfCode/admin-panel/blob/master/LICENSE">License</a></p>    
  </body>
  
<?php
include('user.php');
$user_name = $_POST['UID'];
$user_password = $_POST['passwd'];
$db = mysqli_connect('localhost',$user,$pass,$database) or die("Error connecting to MYSQL");
$query = "SELECT password FROM $table WHERE name = '$user_name'";
mysqli_query($db, $query) or die("<p class=\"text-align:center;\">Unable to access MYSQL</p>");
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
$password=$row['password'];
if(password_verify($_POST['passwd'], $password)){
        $_SESSION['status'] = "1";
        header("Location: /options.php");
        die();
}else if(!empty($user_name)){
	echo "<p class=\"false\" style=\"color:red;text-align:center;\">INVALID</p>";
}
mysqli_close($db);




?>

</html>
