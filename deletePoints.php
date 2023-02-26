<?php
include 'config.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `points` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "deleted successfully";
        header('location: pointsDashboard.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>