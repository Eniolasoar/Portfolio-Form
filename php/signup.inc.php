<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submitbtn'])) {
     
        require_once "function.inc.php";
        include_once "connection.inc.php";
        //make sure function is at the top
        function secure($input)
        {
            $input = htmlspecialchars($input);
            $input = stripslashes($input);
            $input = trim($input);

            //don't forget to add return
            return $input;
        }



        $firstname = secure($_POST["firstname"]);
        $lastname = secure($_POST["lastname"]);
        $username = secure($_POST["username"]);
        $email = secure($_POST["email"]);
        $nationality = secure($_POST["nationality"]);
        $gender = secure($_POST["gender"]);
        $password = secure($_POST["password"]);
        $repeatPassword = secure($_POST["repeatPassword"]);
        $userId = random_int(0, 20000);


        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);



        $img_name = $_FILES['file']['name'];
        $img_size = $_FILES['file']['size'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];


       
        //file error
        if($error!==0){
            header("location:../html/signup.php?error=file-error");
            exit();
        }

        //file size
        if($img_size>125000){
            header("location:../html/signup.php?error=file-size-error");
            exit();
        }

        //check if it is an image
        if(getimagesize($tmp_name)==false){
            header("location:../html/signup.php?error=not-an-image");
            exit();
        }

        //check file extension
        $extensions_allowed=array("jpg","jpeg","png");
        $imageExtension=pathinfo($img_name,PATHINFO_EXTENSION);
        $imageExt=strtolower($imageExtension);
        if(!in_array($imageExt,$extensions_allowed)){
            // echo "<pre>";
            // print_r($_FILES['file']);
            // echo "</pre>";
            header("location:../html/signup.php?error=invalidfileExtension");
           
            exit();
        }

       



        if (emptyFunction($firstname, $lastname, $username, $email, $nationality, $gender, $password, $repeatPassword) == "true") {
            header('location:../html/signup.php?error=empty');
            exit();
        }

        if (maxlength($firstname, $lastname, $username, $email, $nationality, $gender, $password, $repeatPassword) == "true") {
            header('location:../html/signup.php?error=exceededLength');
            exit();
        }
        if (numericString($username) == "true") {
            header('location:../html/signup.php?error=numericString');
            exit();
        }
        if (emailValidate($email) == "false") {
            header('location:../html/signup.php?error=invalidEmail');
            exit();
        }
        if (validateString($firstname, $lastname) == "false") {
            header('location:../html/signup.php?error=validInput');
            exit();
        }

        if (passwordMatch($password, $repeatPassword) == "false") {
            header('location:../html/signup.php?error=matchedPassword');
            exit();
        }

        if (userExists($conn, $username) !== "false") {
            header("location:../html/signup.php?error=usernameExists'");
            exit();
        }
        if (emailExists($conn, $email) !== "false") {
            header("location:../html/signup.php?error=existsExists'");
            exit();
        }

        //upload files
        $new_img_name = uniqid("IMG-", true).'.'.$imageExt;
        $img_upload_path = 'uploads/'.$new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);
            
        
		
        // ini_set('display_errors', 1);
        // ini_set('display_startup_errors', 1);
        // error_reporting(E_ALL);

        
        $stmt = $conn->prepare("INSERT INTO `users` (userId,firstName,lastName,userName,email,nationality,gender,passwords,image_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issssssss", $userId, $firstname, $lastname, $username, $email, $nationality, $gender, $hashedPassword,$new_img_name);

        $stmt->execute();
        $stmt->close();

        header("location:../html/login.php");
    } else {
        header('location:../html/signup.php');
    }
} else {
    header('location:../html/signup.php');
}
