<?php

include ("connection.php");
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql="INSERT INTO operations( username, email, password) VALUES ('$name','$email','$password')";
    if(mysqli_query($con,$sql)){
      // echo "data inserted succesfully";
      header("location:read.php");
    }
    else{
       echo "not inserted";
    }
    };

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
    <form action ="create.php" method ="post">
    <div class="mb-3">
    <label>Username</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label>email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label>password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
  </body>
</html>