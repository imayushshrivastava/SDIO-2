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


//Delete Record

$id = $_GET['id'];

// //Query
$delete = "DELETE FROM name WHERE id='$id'";

if(mysqli_query($conn, $delete)){
    echo "Record Deleted Successfully";
} else{
    echo "Delete Failed";
}
