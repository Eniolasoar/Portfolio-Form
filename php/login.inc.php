<?php

require_once 'connection.inc.php';
require_once "function.inc.php";

    $username=$_POST['username'];
    $password=$_POST['password'];

    $userExists=userExists($conn,$username);

   $pwdHashed=$userExists["password"];
   $checkedPassword=password_verify($password,$pwdHashed);

   if(!$checkedPassword){
    echo "wrong login";
   }
   session_start();
   $_SESSION["username"]=$userExists["userName"];
   $_SESSION["image"]=$userExists["image_url"];
   $_SESSION["id"]=$userExists["userId"];
   $_SESSION["firstName"]=$userExists["firstName"];
   $_SESSION["lastName"]=$userExists["lastName"];
   $_SESSION["userName"]=$userExists["userName"];
   $_SESSION["email"]=$userExists["email"];
   $_SESSION["nationality"]=$userExists["nationality"];
   $_SESSION["gender"]=$userExists["gender"];
   header("location:../html/index.php");
