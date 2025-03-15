<?php
 
include("connection.php");

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `operations` where ID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo"deleted successfully";
        header("location:http://localhost/crud/read.php");
    }
    else{
        echo "not deleted";
    }
}
?>