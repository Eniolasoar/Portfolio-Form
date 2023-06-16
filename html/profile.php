<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     

    <div class="profile">
        <h2>My Profile</h2>
        <img src="../php/uploads/<?=$_SESSION["image"]?>" width="200" style="margin:auto">
        <div class="profile-details">
            <label for="name">First Name:</label>
            <p></p>
        </div>
        <div class="profile-details">
            <label for="name">Last Name:</label>
            <p></p>
        </div>
        <div class="profile-details">
            <label for="name">UserName:</label>
            <p></p>
        </div>
        <div class="profile-details">
            <label for="name">Email Address:</label>
            <p></p>
        </div>
        <div class="profile-details">
            <label for="name">Nationality:</label>
            <p></p>
        </div>
        <div class="profile-details">
            <label for="name">Gender:</label>
            <p></p>
        </div>
    </div>
</body>
</html>