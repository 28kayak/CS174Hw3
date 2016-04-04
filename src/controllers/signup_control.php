<?php
require_once("../models/User.php");
$username=$_POST['username'];
$password= $_POST['password'];
//echo $_POST['username'];
//echo '<br></br>';
//echo $_POST['password'];
$user = new User($username,$password);
if ($user->create_login($username,$password))
{
	require_once("../index.php");
	echo "<h2>sign-up succeeded</h2>";
}else{
	require_once("../views/signup_view.php");
	echo "<h2>sign-up failed</h2>";
}

?>
