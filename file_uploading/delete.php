<?php

include("connection.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from `students` where id='$id'";
    $result=mysqli_query($con,$sql);
    $row=myqli_fetch_assoc($result);
    $image=$row['student image'];


    if(file_exists($image)){
        unlink($image);
        $sql="delete from `students` where id='$id'";
        $result=mysqli_query($con,$sql);
        if($result){
            echo" data deleted";
        }
        else{
            echo"not deleted";
        }
    }
}







?>