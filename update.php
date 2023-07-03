<?php
include ('connect.php');
$id =$_GET['updateid'];
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];



$sql= "UPDATE `user_inputs` SET `name`='$name',`email`='$email',`mobile`='$email',`password`='$password' where `id`= $id";
// echo $sql;

// $result= mysqli_query($conn,$sql);
$result = mysqli_query($conn,$sql);
print_r($result);
if($result){
    header('location:display.php');
}else{
  echo"not success";
}
}


?>
<html>
    <head>
        <title>crud app</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <head>
            <body>
                <div class="container my-5">
                    <form method="post"> 
                    <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name = "name" placeholder="Enter your Name" >
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name = "email" placeholder="Enter your email" >
    
  </div>
  <div class="mb-3">
    <label class="form-label">mobile number</label>
    <input type="text" class="form-control" name = "mobile" placeholder="Enter your Mobile number" >
    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="text" class="form-control" name = "password" placeholder="Enter your password" >
    
  </div>
  
  <button type="submit" class="btn btn-primary my-5" name ="submit">Update </button>
  <!-- <button  type="submit" class="btn-primary my-5" name ="submit"><a href="display.php" class="text-light">Submit</a></button> -->
</form>
                </div>
            </body>
</html>