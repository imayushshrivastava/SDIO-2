<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CRUD App</title>

  <link rel="stylesheet" href="assets/css/bootstrap.css" />
</head>

<body>

  <div class="container">
    <div class="row m-5">
      <div class="col-6">
        <form action="insert.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Full Name">
          </div>
        <div class="mb-3">
            <label class="form-label">Mobile</label>
            <input type="tel" name="phone" class="form-control" placeholder="10 Digit">
          </div>
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea class="form-control" name="message" placeholder="Write your message....." id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn-primary btn-block" value="submit">Submit Now</button>
        </form>
      </div>

      <div class="col-md-6 p-3">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
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

  //Fetch Record from Database
  $fetch = "SELECT * FROM name";

  $result = mysqli_query($conn, $fetch);

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){

   ?>
   
   <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['mobile']; ?> </td>
      <td><?php echo $row['date']; ?></td>
      <td>
      <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger mb-3">DELETE</a>
      <a href="update_form.php?id=<?php echo $row['id']; ?>"  class="btn btn-primary">UPDATE</a>
      </td>
    </tr>

  <?php  } } ?>

  </tbody>
</table>
      </div>
    </div>
  </div>


  <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>
