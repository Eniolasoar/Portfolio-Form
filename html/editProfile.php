<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/editProfile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora|Ubuntu:300,400,700&display=swap">
    <title>Edit Profile</title>
</head>
<body>
    <div >
        <form action="../php/editProfile.php" method="post" enctype="multipart/form-data" class="container">
            <div class="editImage">
                <h1>Jamed Alian</h1>
                <p>@username</p>
                <img src="../images/html.png" alt="" width="100px">
                <button class="button" onclick="document.getElementById('image').click()">Upload New Photo</button>
                <input type="file" name="profilePicture" id="image" style="display:none;">
            </div>
            <div class="editBody">
                <div class="bodyHeader">
                    <h1>Edit Profile</h1>
                    <div class="nav">
                        <a href="">User Info</a>
                        <a href="">Password Reset</a>
                    </div>
                </div>
    
                <div class="body">
                    <div class="input-box">
                        <label for="name">First Name:</label>
                        <input type="text" name="firstName" id="">
                    </div>
    
                    <div class="input-box">
                        <label for="name">Last Name:</label>
                        <input type="text" name="lastName" id="">
                    </div>
    
                    <div class="input-box">
                        <label for="name">UserName</label>
                        <input type="text" name="userName" id="">
                    </div>
    
                    <div class="input-box">
                        <label for="name">Email Address:</label>
                        <input type="email" name="email" id="">
                    </div>
    
                    <div class="input-box">
                        <label for="name">Nationality</label>
                        <input type="text" name="nationality" id="">
                    </div>
    
                    <div class="input-box">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        
                    </div>
                </div>
    
                <input type="submit" value="Update Info" name="updateButton" class="button submitButton">
                </div>
            </div>
    
        </form>
    </div>
    
</body>
</html>