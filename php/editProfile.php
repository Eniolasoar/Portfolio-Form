<?php
if(isset($_POST["updateButton"])){
    include "connection.php";
    include "function.inc.php";

    $updatedFirstName=htmlspecialchars($_POST["firstName"]);
    $updatedLastName=htmlspecialchars($_POST["lastName"]);
    $updatedUserName=htmlspecialchars($_POST["userName"]);
    $updatedEmail=htmlspecialchars($_POST["email"]);
    $updatedNationality=htmlspecialchars($_POST["nationality"]);
    $updatedGender=htmlspecialchars($_POST["gender"]);

    echo "$updatedFirstName";
    if (emptyFunction2($updatedFirstname, $updatedLastname, $updatedUsername, $updatedEmail, $updatedNationality, $updatedGender) == "true") {
        header('location:../html/editProfile.php?error=empty');
        exit();
    }

    if (maxlength2($updatedFirstname, $updatedLastname, $updatedUsername, $updatedEmail, $updatedNationality, $updatedGender) == "true") {
        header('location:../html/editProfile.php?error=exceededLength');
        exit();
    }
    if (numericString($updatedUsername) == "true") {
        header('location:../html/editProfile.php?error=numericString');
        exit();
    }
    if (emailValidate($updatedEmail) == "false") {
        header('location:../html/editProfile.php?error=invalidEmail');
        exit();
    }
    if (validateString($updatedFirstname, $updatedLastname) == "false") {
        header('location:../html/editProfile.php?error=validInput');
        exit();
    }

    if (userExists($conn, $updatedFsername) !== "false") {
        header("location:../html/editProfile.php?error=usernameExists'");
        exit();
    }
    if (emailExists($conn, $updatedFmail) !== "false") {
        header("location:../html/editProfile.php?error=existsExists'");
        exit();
    }

     //handling file upload
     $fileName=$_FILES["profilePicture"]["name"];
     if($fileName==""){
        header("location:../html/editProfile.php?error=nofileprovided");
     }
     $fileTmpName=$_FILES["profilePicture"]["tmp_name"];
     $fileSize=$_FILES["profilePicture"]["size"];
     $fileError=$_FILES["profilePicture"]["error"];

     $extension=explode(".",$fileName);
     $fileExt=strtolower(end($extension));

     $allowed_ext=array("jpg","jpeg","png");
     if($fileError ==0){
         if(in_array($fileExt,$allowed_ext)){
             if($fileSize <= 500000){
                 $uniqueFileName=uniqid("IMG-",true).".".$fileExt;
                 $fileDestination="uploads/".$uniqueFileName;
                 if(!move_uploaded_file($fileTmpName,$fileDestination)){
                    header("location:../html/editProfile.php?error=uploadunsuccessful");
                 }

             }
             else{
                header("location:../html/editProfile.php?error=largefilesize");
             }
         }
         else{
            header("location:../html/editProfile.php?error=invalidFileType");
         }

     }
     else{
        header("location:../html/editProfile.php?error=invalidfile");
     }

     
     $stmt=$conn->prepare("UPDATE `users` SET `firstName`=?,`lastName`=?,`userName`=?,`email`=?,`nationality`=?,`gender`=?,`image_url`=?");
     $stmt->bind_param("ssssss",$updatedFirstName,$updatedLastName,$updatedUserName,$updatedEmail,$updatedNationality,$updatedGender,$$uniqueFileName);
     if($stmt->execute()){
        header("location:../html/editProfile.php?error=none");
     }
     
     

     
}
else{
    header("location:../html/editProfile.php");
}