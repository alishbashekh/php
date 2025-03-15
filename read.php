<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="create.php" class="text-light">add data</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">USERNAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
    </tr>
  </thead>
  <tbody>
    <?php
   $sql="select * from operations";
   $result=mysqli_query($con,$sql);
   if($result){
    while($row=mysqli_fetch_assoc($result)){
      $id=$row['ID'];
      $username=$row['username'];
      $email=$row['email'];
      $password=$row['password'];

      echo '<tr>
      <th scope "row">'.$id.'</th>
      <td>'.$username.'</td>
      <td>'.$email.'</td>
      <td>'.$password.'</td>
       <td>
      <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-white">update</a></button>
      <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-white">delete</a></button>
      </td>
      </tr>';

    }
   };
    ?>
  

  </tbody>
</table>
    </div>
</body>
</html>