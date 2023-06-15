<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/login.css">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <h2>Log in to your Account</h2>
        <form action="/php/login.inc.php" method="post">
            <div class="row1" style="position: relative">
                <input
                    type="text"
                    name="username"
                    class="inputField input"
                /><br />
                <label class="placeholder">UserName/Email Address:</label>
            </div>

            <div class="row1" style="position: relative">
                <input
                    type="text"
                    name="username"
                    class="inputField input"
                /><br />
                <label class="placeholder">Password:</label>
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