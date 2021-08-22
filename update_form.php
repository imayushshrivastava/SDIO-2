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
                <?php
                
                $id = $_GET['id'];

                //Fetch Record from Database
                $fetch = "SELECT * FROM name WHERE id='$id'";

                $result = mysqli_query($conn, $fetch);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>

                        <form action="update.php" method="POST">

                            <input type="hidden" value="<?php echo $row['id']; ?> " name="id">

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" value="<?php echo $row['name']; ?> " name="name" class="form-control" placeholder="Full Name">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-block" value="submit">Submit Now</button>
                        </form>
                <?php  }
                } ?>

            </div>

        </div>
    </div>


    <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>
