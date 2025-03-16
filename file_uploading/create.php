<?php
include ('connection.php');
if(isset($_POST['submit'])){
   $name=$_POST['stud-name'];
   $email=$_POST['stud-email'];
   $phone=$_POST['stud-phone'];
   $image=$_FILES['stud-image']['name'];
   $tmp_dir=$_FILES['stud-image']['tmp_name'];
   $current_dir='uploads/'.time()."_".$image;


      if(!file_exists('uploads')){
         mkdir("uploads",0777,true);
      }
      if(move_uploaded_file($tmp_dir,$current_dir)){
         $sql="INSERT INTO `students`(`student name`, `student email`, `student phone`, `student image`) VALUES ('$name','$email','$phone','$current_dir')";
        
         $query=mysqli_query($con,$sql);
         if($query){
            echo "data inserted succesfully";
         }
         else{
            echo "not";
         }
      }
   

}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>php crud</title>
  </head>
  <body>
   <div class="container my-5">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                 <h4>php image uploading form</h4>
                </div>
                <div class="card-body">
                 <form action="create.php" method="post" enctype="multipart/form-data">
                 <div class="form-group mt-3">
                    <label for="">student name</label>
                    <input type="text" name="stud-name" class="form-control" placeholder="enter name here">
                 </div>
                 <div class="form-group mt-3">
                    <label for="">student email</label>
                    <input type="email" name="stud-email" class="form-control" placeholder="enter email here">
                 </div>
                 <div class="form-group mt-3">
                    <label for="">student phone</label>
                    <input type="text" name="stud-phone" class="form-control" placeholder="enter phone no. here">
                 </div>
                 <div class="form-group mt-3">
                    <label for="">student image</label>
                    <input type="file" name="stud-image" class="form-control">
                 </div>
                <div class="form-group mt-4" >
                    <button name="submit" class="btn btn-primary">submit</button>
                </div>

                 </form>
                </div>
            </div>
        </div>
      </div>
   </div>

  
 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
   
  </body>
</html>