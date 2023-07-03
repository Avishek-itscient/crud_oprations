<?php

$conn =new mysqli('localhost','root',"",'crudopration');


if(!$conn){
    die(mysqli_error($conn));
}

?>