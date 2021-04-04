<?php include ('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Form </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h2>Log in</h2>
</div>

<form method="post" action="login.php">
    <?php include ('errors.php')?>
    <div class="input-group">
        <lable>Username</lable>
        <input type="text" name="Username" required>
    </div>



    <div class="input-group" >
        <lable>Password</lable>
        <input type="password" name="Password" required>
    </div>

    <div class="input-group">
        <button type="submit" name="login" class="btn">Login</button>
    </div>
    <p>
        Not yet member? <a href="SignForm.php">Sign up</a>
    </p>

</form>


</body>
</html>
