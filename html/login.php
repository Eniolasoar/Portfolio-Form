<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/login.css">
    <title>Document</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        input[type="submit"]{
            width: 100%;
            height: 50px;
            border-radius: 10px;
            padding: 10px;
            background-color:rgba(0, 77, 128,70%)  ;
        }
        input[type="submit"]:hover{
            cursor: pointer;
            background-color:rgba(0, 77, 128,100%)  ;
        }
        a{
            color: white;
            margin: 0 5px 0 5px;
        }
        a:hover{
            color: rgba(0, 77, 128,70%)  ;;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Log in to your Account</h2>
        <form action="../php/login.inc.php" method="post">
            <div class="row1" style="position: relative">
                <input
                    type="text"
                    name="username"
                    class="inputField input" placeholder="Username/Email Address"
                /><br />
                <!-- <label class="placeholder">UserName/Email Address:</label> -->
            </div>

            <div class="row1" style="position: relative">
                <input
                    type="text"
                    name="password"
                    class="inputField input" placeholder="Password"
                /><br />
                <!-- <label class="placeholder">Password:</label> -->
            </div>

            <input type="submit" value="Log In">
            <div class="message">
                <a href="">Don't have an acccount?</a>
                <a href="">Forgot Password?</a>

            </div>
        </form>
    </div>
</body>
</html>