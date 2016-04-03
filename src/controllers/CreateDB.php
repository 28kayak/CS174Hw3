<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);






mysqli_close($conn);

function checkConnection($connection)
{
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
}

function createUserInfo($connection)
{
  $sql = "CREATE TABLE User (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(50),
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table UserInfo created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
}//createDatabase

function createImageTable($connection)
{
  $spl = "CREATE TABLE Image (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    caption VARCHAR(50),
    date VARCHAR(50),
    reg_date TIMESTAMP"

}
function createVotingTable($conncetion)
{
  $spl = "CREATE TABLE Image (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    rate INT(3) UNSIGNED,
    username VARCHAR(30) NOT NULL,
    filename VARCHAR(50) NOT NULL,
    date VARCHAR(50),
    reg_date TIMESTAMP"
}



?>
