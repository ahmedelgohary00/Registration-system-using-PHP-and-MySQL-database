<?php include("server.php")?>
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
        <h2>Register</h2>
    </div>

    <form method="post" action="SignForm.php">
        <?php include ('errors.php')?>

        <div class="input-group">
            <lable>Username</lable>
            <input type="text" name="Username" required>
        </div>

        <div class="input-group">
            <lable>Email</lable>
            <input type="text" name="Email" required>
        </div>

        <div class="input-group">
            <lable>Password</lable>
            <input type="password" name="Password_1" required>
        </div>
        <div class="input-group">
            <lable>Confirm Password</lable>
            <input type="password" name="Password_2" required>
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>

    </form>


</body>
</html>