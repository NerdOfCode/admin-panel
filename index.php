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
    <title>Custom Admin Panel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <h1 style="text-align:center;">Admin Panel</h1><hr>
    <form name="form" id="form" action="" method="post" >
      Username:&ensp;<input type="text" name="UID" id="UID" required><br>
      Password:&ensp; <input type="password" name="passwd" id="passwd" required><br>
      <input type="submit" value="Submit" onClick="">
    </form>
    
<script>
$(document).ready(function(){
	$('#form').submit(function(){
		$('#UID').fadeOut();
		$('#passwd').fadeOut();
})
	
});
</script>
    
  </body>
  
<?php
include('user.php');
$user_name = $_POST['UID'];
$user_password = $_POST['passwd'];
$db = mysqli_connect('localhost', $user,$pass,$database) or die("Error connecting to MYSQL");
$query = "SELECT password FROM $table WHERE name = '$user_name'";
mysqli_query($db, $query) or die("Unable to access MYSQL");
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
$password=$row['password'];
if($user_password == $password && $user_name != ""){
        $_SESSION['status'] = "1";
        header("Location: /options.php");
        die();
}else if($user_password != $password && $user_name != ""){
        echo "An error has occured... Please try again later";
        $_SESSION['status'] = "0";
}

mysqli_close($db);




?>

</html>
