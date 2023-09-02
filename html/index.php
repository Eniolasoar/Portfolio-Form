
<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/index.css">
    <title>Document</title>
</head>
<!-- <body>
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

    ?> -->

    <section>
        <nav>
            <ul class="nav-bar">
                <div class="left-menu">
                    <li><a href="">HOME</a></li>
                    <li><a href="">ABOUT US</a></li>
                    <li><a href="">NOTIFICATION</a></li>
                </div>
                
                <div class="right-menu">
                    <li style="position: relative;" id="profile">
                    <img src="../php/uploads/<?=$_SESSION["image"]?>" alt="" >
                    <a href="">
                    Welcome <?php echo $_SESSION["userName"]?>!!
                    </a>
                    
                        <ul class="dropdown">
                            <li><a href="profile.php">View Profile</a></li>
                            <li><a href="../php/logout.php">Log Out</a></li>
                        </ul>
                    </li>
                </div>
               
            </ul>

        </nav>
    </section>
   
</body>
</html>