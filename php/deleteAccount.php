<?php
include "connection.php";
$username=$_SESSION["userName"];

$sql="DELETE FROM `users` WHERE `userName`=$username";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:../html/profile.php?info=deleted");
}