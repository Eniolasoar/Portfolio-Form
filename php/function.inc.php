<?php

//never use a keyword
function emptyFunction($firstname,$lastname,$username,$email,$nationality,$gender,$password,$repeatPassword){
    $result="";
    if(empty($firstname)||empty($lastname)||empty($username)||empty($email)||$nationality==""||$gender==""||$password==""||$repeatPassword==""){
        $result="true";
    }
    else{
        $result="false";
    }
    return $result;
}


function maxlength($firstname,$lastname,$username,$email,$nationality,$gender,$password,$repeatPassword){
    $result="";
    if((strlen($firstname)>30||strlen($lastname)>30||strlen($username)>30||strlen($email)>30||strlen($nationality)>30||strlen($gender)>30||strlen($password)>22||strlen($repeatPassword)>22)){
        $result="true";
    }
    else{
        $result="false";
    }
    return $result;
}



function numericString($username){
    $result="";
    if(is_numeric($username)){
        $result="true";
    }
    else{
        $result="false";
    }
    return $result;
}

function emailValidate($email){
    $result="";
    $email=filter_var($email,FILTER_SANITIZE_EMAIL);
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result="true";
    }
    else{
        $result="false";
    }
    return $result;
}

function validateString($firstname,$lastname){
    $result="";
    if(preg_match("/^[a-zA-Z]*$/",$firstname)&&preg_match("/^[a-zA-Z]*$/",$lastname)){
        $result="true";
    }
    else{
        $result="false";
    }
    return $result;
}

function passwordMatch($password,$repeatPassword){
    $result="";
    if($password==$repeatPassword){
        $result="true";
    }
    else{
        $result="false";
    }
    return $result;
}

function userExists($conn,$username){
    $sql="SELECT * FROM users WHERE userName=?;";
    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:../html/signup.html?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$username);
    mysqli_stmt_execute($stmt);

    $resultData=mysqli_stmt_get_result($stmt);

    if ($row= mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result="false";
        return $result;
    }

    mysqli_stmt_close($stmt);
}



function emailExists($conn,$email){
    $sql="SELECT * FROM users WHERE email=?";
    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:../html/signup.html?error=stmtFailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);

    $resultData=mysqli_stmt_get_result($stmt);

    if($row=mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result="false";
        return $result;
    }

    mysqli_stmt_close($stmt);



}



