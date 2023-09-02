<?php
$serverName="localhost";
$userName="root";
$password="";
$databaseName="newportfolio";

$conn=new mysqli($serverName,$userName,$password,$databaseName);

if(mysqli_connect_error()){
    die("CONNECTION FAILED:".mysqli_connect_error());
}


?>