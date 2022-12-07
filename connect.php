<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"crudeoperation");

if($connection){
    
} else{
    die(mysqli_error($connection));
}

?>
