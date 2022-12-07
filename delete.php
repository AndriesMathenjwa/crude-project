<?php
include 'connect.php';
if(isset($_GET['deletedid'])){
    $id=$_GET['deletedid'];
    $sql="delete from `crude` where id=$id";
    $resut = mysqli_query($connection,$sql);
    if($resut){
        header('location:display.php');
    }else{
        die(mysqli_error($connection));  
    }
}

?>

