<?php include ('server.php');
if (empty($_SESSION['username'])){
    header('location: login.php');
}
?>
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
        <h2>Home page</h2>
    </div>

    <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION['Username'])): ?>
            <p>Welcome <strong><?php echo $_SESSION['Username']; ?> </strong></p>
        <p><a href="index.php?logout='1'" style="color: #ff0000">Logout</a></p>

        <?php endif ?>


    </div>

</body>
</html>
