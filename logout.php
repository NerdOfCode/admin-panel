<?php
session_start();
if($_SESSION['status']=="1"){
	echo "You have been logged out<br>";
	echo "<br>!!!NOTICE!!!<br><br>Your saved inputs have been destroyed<br>";
	//DESTROY SESSION STUFF
	session_unset();
	session_destroy();
}
?>
<script>
alert("You have been logged out...");
window.location = "index.php";

</script>
