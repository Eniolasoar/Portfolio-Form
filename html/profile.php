<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing: border-box;
        }
       body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: gainsboro;
        }
        h2{
            text-align: center;
            margin-bottom: 10px;
        }
        .profile{
            border: 1px solid black;
            padding: 10px;
            padding-bottom: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 30px;
            width: 60%;
        }
        img{
            border-radius: 45%;
            
        }
        
        .profile-label,.profile-value{
            display: flex;
            flex-direction: column;
            gap: 20px;
           
        }
       
        .flex-container{
            display: flex;
            flex-direction: row;
            gap: 40px;
        }
    </style>
</head>
<body>
    
     

    <div class="profile">
        <h2>My Profile</h2>
        <img src="../php/uploads/<?=$_SESSION["image"]?>" width="200" style="margin:auto">
        <div class="flex-container">
            <div class="profile-label">
                <label for="name">First Name:</label>
                <label for="name">Last Name:</label>
                <label for="name">UserName:</label>
                <label for="name">Email Address:</label>
                <label for="name">Nationality:</label>
                <label for="name">Gender:</label>
            </div>

            <div class="profile-value">
            
            <p>Anishe Eniola</p>
            <p>Anishe Eniola</p>
            <p>Anishe Eniola</p>
            <p>Anishe Eniola</p>
            <p>Anishe Eniola</p>
            <p>Anishe Eniola</p>
        </div>
        </div>
     
       
    
    </div>
</body>
</html>