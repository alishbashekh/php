
<?php
include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1 class="text-center my-4">table</h1>
<div class="conatiner mt-5 d-flex justify-content-center">
<table class="table table-bordered w-50">
  <thead class="table-dark">
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from `students`";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['student name'];
        $email=$row['student email'];
        $phone=$row['student phone'];
        $image=$row['student image'];


       echo"<tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'<img src='.$image. />'</td>
      </tr>";
       
    }
  
    
    ?>
   
  </tbody>
</table>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>