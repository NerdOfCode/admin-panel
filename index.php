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
    <form name="form" id="form" action="" method="post" >
      Username:&ensp;<input type="text" name="UID" id="UID" required><br><br>
      Password:&ensp;<input type="password" name="passwd" id="passwd" required><br><br>
      <input type="submit" value="Submit" onClick=""">
    </form>
    
<script>
$(document).ready(function(){
	$('#form').submit(function(){
		$('#UID').fadeOut();
		$('#passwd').fadeOut();
})
});
</script>
<p class="footer">By: <a href="https://github.com/NerdOfCode" target="_blank"><b>NerdOf</b>Code</a>, <a href="https://github.com/NerdOfLinux" target="_blank"><b>NerdOf</b>Linux</a></p>    
  </body>
  
<?php
include('user.php');
$user_name = $_POST['UID'];
$user_password = $_POST['passwd'];
$db = mysqli_connect('localhost',$user,$pass,$database) or die("Error connecting to MYSQL");
$query = "SELECT password FROM $table WHERE name = '$user_name'";
mysqli_query($db, $query) or die("Unable to access MYSQL");
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
$password=$row['password'];
if(password_verify($_POST['passwd'], $password)){
        $_SESSION['status'] = "1";
        header("Location: /options.php");
        die();
}else if(! $_SESSION['status']){
	echo "<p class=\"false\">Please re-enter creds.</p>";
}
mysqli_close($db);




?>

</html>
