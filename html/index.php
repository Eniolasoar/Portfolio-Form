
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
            margin: 0;
        }ul{
            list-style-type: none;
        }
        nav{
            
            box-shadow: 0px 0px 2px ;
        }
        .nav-bar{
            display: flex;
            align-items: center;
            flex-direction: row;
            justify-content: space-between;
        }
        .left-menu{
            display: flex;
            align-items: center;
            flex-direction: row;
        }
        a{
            display: block;
            text-decoration: none;
            color:rgba(0,77,128);
            text-transform: uppercase;
        }
        .left-menu li{
            display: inline-block;
            padding: 10px;
        }
        .dropdown li{
           display: block;
           padding: 10px 0;
           
          
        }
       .dropdown a{
        color:white;
       }
       .dropdown li:hover{
        background-color: gainsboro;
        
       }

        .dropdown{
            width: 100px;
            position: absolute;
            top:80px;
            right: 60px;
            padding: 10px 0;
           box-shadow: 0 0 2px;
           background-color: rgba(0,77,128);
           display: none;
          
        }
        img{
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        #profile{
            font-size: 12px;
            text-align: center;
            padding:10px 50px 10px 10px ;
            
            
        }
        #profile:hover .dropdown{
            cursor: pointer;
            display: block;
        }
    </style>
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