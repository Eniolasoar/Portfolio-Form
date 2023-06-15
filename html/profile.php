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
    <img src="../php/uploads/<?=$_SESSION["image"]?>">
    <p>My name is <?php echo $_SESSION["username"]?></p>
    <p>My name is <?php echo $_SESSION["image"]?></p>
</body>
</html>