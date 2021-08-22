<?php 

//Database Connection
$server = "localhost";
$username = "root";
$database = "";
$password = "";

//Connection
$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

//echo "Connected <br/>";

//Record Insert in Database

//Variables
$name = $_POST['name'];
$mobile = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

//echo $name , $mobile , $email, $message;

// //Query
$query = "INSERT INTO NAME (name, email, mobile, message) VALUES ('$name','$email','$mobile','$message')";

if(mysqli_query($conn, $query)){
    echo "Record Inserted Successfully";
} else{
    echo "Record Failed";
}

?>
