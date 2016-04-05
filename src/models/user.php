<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";

class User
{
	private $username;
	private $password;


	function __construct($username, $password){

	}
	function check_login($username, $password){
		$db = mysqli_connect($servername,$db_username,$db_password,"hw3");
		$query = "select * from User where username=\"".$username."\" and password=\"".$password."\"";
		//echo $query;
		$result = mysqli_query($db, $query);
		$num = mysqli_num_rows($result);
		//echo $num;
		mysqli_free_result($result);
		if ($num == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
		mysqli_close($db);
	}
	function create_login($username,$password){

		$db = mysqli_connect("localhost","root","root","hw3");
		$query = "insert into User values (\"".$username."\",\"".$password."\")";
		//echo $query;
		$result = mysqli_query($db, $query);

		if ($result == true)  //??????
		{
			//echo "Success";
			return true;
		}
		else
		{
			//echo "Fail";
			return false;
		}
		mysqli_close($db);


	}
}
?>
