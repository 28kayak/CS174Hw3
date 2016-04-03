<form action="../controllers/signin.php" method="post">
  User Name:<br>
  <input type="text" name="user" value="Enter User Name"><br>
  Password:<br>
  <input type="text" name="password" value="Enter password"><br><br>
  <input type="submit" value="Submit">
</form>

<?php

$user = $_POST["user"];
$password = $_POST["password"];
echo "user name : ";
echo $user."<br>";
echo "password : ";
echo $password."<br>";

//call db and compare if user name and password exists already


 ?>
