<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/profile.css">
    <title>Document</title>
</head>
<body>
    
     

    <div class="profile">
        <h2>My Profile</h2>
        <img src="../php/uploads/<?=$_SESSION["image"]?>" width="150" height="150" style="margin:auto"class="profilePicture">
        <div class="flex-container">
            <div class="profile-label">
                <label for="name">User ID:</label>
                <label for="name">First Name:</label>
                <label for="name">Last Name:</label>
                <label for="name">UserName:</label>
                <label for="name">Email Address:</label>
                <label for="name">Nationality:</label>
                <label for="name">Gender:</label>
            </div>

            <div class="profile-value">
            
                <p><?php echo $_SESSION["id"];?></p>
                <p><?php echo $_SESSION["firstName"]; ?></p>
                <p><?php echo $_SESSION["lastName"]; ?></p>
                <p><?php echo $_SESSION["userName"]; ?></p>
                <p><?php echo $_SESSION["email"]; ?></p>
                <p><?php echo $_SESSION["nationality"]; ?></p>
                <p><?php echo $_SESSION["gender"]; ?></p>


            </div>

        </div>

        <!-----<a href="https://www.freepik.com/search?format=search&last_filter=query&last_value=edit&query=edit&type=icon">Icon by Kiranshastry</a> -->
        <button class="editProfile">
            <img src="../images/edit_Profile.png" width="20">
            <p>Edit Profile</p>

        </button>

        <button class="deleteProfile">
            <img src="../images/edit_Profile.png" width="20">
            <p>Delect Account</p>

        </button>

        <script>
            const edit = document.querySelector(".editProfile");
            const deleteProfile = document.querySelector(".deleteProfile");
            edit.addEventListener('click',()=>{
                window.location.href="editProfile.html";
            });
            deleteProfile.addEventListener('click',()=>{
                window.location.href="../php/deleteAccount.php";
            })
        </script>

        </div>
     
       
    
    </div>

    <button class="backToHome">
        <a href="index.php"><< Back to Home</a>
    </button>
</body>
</html>