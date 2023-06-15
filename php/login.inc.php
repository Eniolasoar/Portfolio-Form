<?php

require_once 'connection.inc.php';
require_once "function.inc.php";

    $username=$_POST['username'];
    $password=$_POST['password'];

    $userExists=userExists($conn,$username);

   $pwdHashed=$userExists["password"];
   $checkedPassword=password_verify($password,$pwdHashed);

   if($checkedPassword==false){
    echo "wrong login";
   }
   session_start();
   $_SESSION["username"]=$userExists["userName"];
   $_SESSION["image"]=$userExists["image_url"];
   header("location:../html/index.php");
