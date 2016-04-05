<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection failed" . $conn->connect_error;
}
else{
  echo "OK to connect<br>";
  echo "call create DB()";
  createDB($conn);

}

//dropDB($conn);


function createDB($conn){
  // Create database
  $sql = "CREATE DATABASE Hw3";
  if ($conn->query($sql) === TRUE) {
      echo "Database created successfully<br>";
  } else {
      echo "<br>Error creating database: " . $conn->error;
  }

}//create DB

function createConnection($conn)
{
  //$servername = "localhost";
  //$username = "username";
  //$password = "password";
  $dbname = "Hw3";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


}

function createUser(){
  // sql to create table
  $sql = "CREATE TABLE Users (
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    last_in TIMESTAMP )";

    if ($conn->query($sql) === TRUE)
    {
      echo "Table Users created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }
}

function createImageTable(){
  $sql = "CREATE TABLE Images(
    username VARCHAR(30) NOT NULL,
    filename VARCHAR(50) NOT NULL,
    caption VARCHAR(100),
    rating  INT(6) UNSIGNED
    uoload TIMESTAMP) ";
  if ($conn->query($sql) === TRUE)
  {
    echo "Table Images created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
}
function dropDB($conn){
  $sql = 'DROP DATABASE myDB';
  if (mysql_query($sql, $conn))
  {
    echo "Database myDB was successfully dropped\n";
  }
  else
  {
    echo 'Error dropping database: ' . mysql_error() . "\n";
  }//if-else
}

function createVoting(){
  $sql = "CREATE TABLE Voting(
    user VARCHAR(30) NOT NULL,
    filename VARCHAR(50) NOT NULL,
    rate INT(3)
  )";

  if ($conn->query($sql) === TRUE)
  {
    echo "Table Voting created successfully";
  } else
  {
    echo "Error creating table: " . $conn->error;
  }
}
echo "<br>before closing db <br>";
$conn->close();

//reference to connect to mysql from xampp
//http://hapisupu.com/2015/11/xampp-5-6-14-version-up-fix-no-security/

?>
