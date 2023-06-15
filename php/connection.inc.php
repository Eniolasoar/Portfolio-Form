<?php
$serverName="localhost";
$userName="root";
$password="";
$databaseName="newportfolio";

$conn=new mysqli($serverName,$userName,$password,$databaseName);

if($conn->connect_error){
    die("CONNECTION FAILED:".$conn->connect_error);
}


?>