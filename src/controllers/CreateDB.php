<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function createDB($conn){
  // Create database
  $sql = "CREATE DATABASE myDB";
  if ($conn->query($sql) === TRUE) {
      echo "Database created successfully";
  } else {
      echo "Error creating database: " . $conn->error;
  }

}//create DB

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

function createImage(){
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

$conn->close();
?>
