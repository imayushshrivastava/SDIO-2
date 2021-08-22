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
$id = $_POST['id'];
$name = $_POST['name'];

// //Query
$update = "UPDATE name SET name='$name' WHERE id='$id'";

if(mysqli_query($conn, $update)){
    echo "Record Update Successfully";
} else{
    echo "Update Failed";
}
