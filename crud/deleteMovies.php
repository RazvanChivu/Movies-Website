<?php

include '../db.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from movies where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted Succesfully";
        header('location:movies.php');
    }else{
        die(mysqli_error($con));
    }
}
?>