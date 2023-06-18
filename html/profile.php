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
            font-family: COPPERPLATE;

        }
       body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image:linear-gradient(200deg,rgba(0,162,252), rgba(0,77,128)) ;
        }
        h2{
            text-align: center;
            margin-bottom: 10px;
            text-decoration: underline;
        }
        .profile{
            
            padding: 10px;
            padding-bottom: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 30px;
            width: 60%;
            min-width: 350px;
            max-width: 500px;
            background-color: gainsboro;
            box-shadow: 0 2px 6px  ;
        }
        img{
            border-radius: 50%;
            
        }
        
        .profile-label,.profile-value{
            display: flex;
            flex-direction: column;
            gap: 12px;
           
        }
       
        .flex-container{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }
        label{
            font-weight: 700;
            flex: 50%;
        }
        p{
            /* background-color:  rgba(0,77,128); */
            font-weight: 700;
            border-radius: 10px;
            color: rgba(0,77,128);
            word-wrap: break-word;
            flex: 50%;
        }
        button{
            padding: 10px;
            width: 150px;
            border-radius: 10px;
            position: fixed;
            bottom: 20px;
            left: 50px;
            background-color: rgba(0,77,128,50%);
        }
        button a{
            color:white;
            text-decoration: none;
        }
        button a:active{
            transform: translate(0,5px);
        }
        button:hover{
            cursor: pointer;
            background-color: rgba(0,77,128,100%);
        }
        @media screen and (max-width:700px) {
            .flex-container{
                gap: 65px;
            }
            label{
                margin: 2.2px 0;
            }
            p{
                width: 100px;
            }
            
        }
    </style>
</head>
<body>
    
     

    <div class="profile">
        <h2>My Profile</h2>
        <img src="../php/uploads/<?=$_SESSION["image"]?>" width="150" height="150" style="margin:auto">
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
     
       
    
    </div>

    <button>
        <a href="index.php"><< Back to Home</a>
    </button>
</body>
</html>