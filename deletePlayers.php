<?php
include 'config.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `players` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "deleted successfully";
        header('location: playerDashboard.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>