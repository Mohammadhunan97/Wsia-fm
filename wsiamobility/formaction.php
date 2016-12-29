<?php 
// []
// {}
// Connect to Database + on fail statement:
$conn = mysqli_connect("localhost", "root", "", "loginsystem");
   if (!$conn){
   	die("Connection failed:     ". mysqli_connect_error());
   }


// Post form data to a variable:
$firstname = $GET['firstname']; 
$lastname = $GET['lastname']; 
$membertype = $GET['membertype']; 
$emplid = $GET['emplid']; 




// Upload Variables to table 'users': 
$sql = "INSERT INTO users (id, firstname, lastname, username, emplid)
  VALUES (NULL , '$firstname', '$lastname', '$membertype' , '$emplid')";
$results= mysqli_query($conn , $sql);

header("Location: index.php");


