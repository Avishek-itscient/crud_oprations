<?php

include ('connect.php');
if(isset( $_GET['deleteid'])){
    $id = $_GET['deleteid'];
}



$sql="delete from `user_inputs` where id=$id";
$result = mysqli_query($conn,$sql);
if($result){
    // echo "Delete Successfully";
    header('location:display.php');
}else{
    die(mysqli_error($conn));
}


?>