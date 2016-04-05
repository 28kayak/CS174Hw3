<?php
require_once("../models/User.php");
$username=$_POST['username'];
$password= $_POST['password'];
echo $_POST['username'];
echo '<br></br>';
echo $_POST['password'];
$user = new User($username,$password);

if ($user->check_login($username,$password))
{
	echo "good";
}else{
	echo "bad";
}

?>
