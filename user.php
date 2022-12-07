<?php
include 'connect.php';
if(isset($_POST['submit'])){
 
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$sql = "INSERT INTO `crude`(name,email,mobile,password)
 VALUES ('$name','$email','$mobile','$password') ";
$resut = mysqli_query($connection,$sql);
if($resut){
  header('location:display.php');
}else{
  die(mysqli_error($connection));
}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <form method="post" >
  <div class="mb-3">
    <label >name</label>
    <input type="text" class="form-control" placeholder = "enter your name" name ="name" >

    <div class="mb-3">
    <label >email</label>
    <input type="text" class="form-control" placeholder = "enter your email" name ="email" >
    <div class="mb-3">
    <label >mobile</label>
    <input type="text" class="form-control" placeholder = "enter your mobile" name ="mobile" >
    <div class="mb-3">
    <label >password</label>
    <input type="text" class="form-control" placeholder = "enter your password" name ="password" >

  
  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
</form>

    </div> 
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
