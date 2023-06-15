
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
        ul{
            float: right;
        }
        a{
            display: block;
        }
        li{
            display: inline-block;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_SESSION["username"])){
        echo "<li><a href='../html/profile.php'>Click Here to view your profile</a></li>";
        echo "<li><a href='../php/logout.php'>Click Here to Log out/a></li>";
    }
    else{
        echo " <ul>
        <li><a href=''>Home</a></li>
        <li><a href=''>Log In</a></li>
        <li><a href='signup.html'>Sign UP</a></li>
    </ul>";
    }

    ?>
   
</body>
</html>