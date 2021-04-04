<?php
    session_start();
    $username = "";
    $email = "";
    $errors = array();



    $db = mysqli_connect('localhost', 'root', '','registration');


   if (isset($_POST['register'])){
       $username = mysqli_real_escape_string($db, $_POST['Username']);
       $email = mysqli_real_escape_string($db, $_POST['Email']);
       $password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
       $password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);

       if ($password_1 != $password_2){
           array_push($errors, "the tow passwords do not match");
       }
            if (count($errors) == 0) {
                 $password = md5($password_1);
                 $sql = "INSERT INTO users (username,email,password) VALUES ('$username', '$email', '$password')";

                 mysqli_query($db,$sql);
                 $_SESSION['Username'] = $username;
                 $_SESSION['success'] = "you are now logged in";
                 header('location : index.php');


            }

       if (isset($_POST['login'])) {
           $username = mysqli_real_escape_string($db, $_POST['Username']);
           $password = mysqli_real_escape_string($db, $_POST['Password_2']);

           if (count($errors) == 0) {
               $password = md5($password);
               $query = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
                $result = mysqli_query($db, $query);
                if (mysqli_num_rows($result)==1) {
                    $_SESSION['Username'] = $username;
                    $_SESSION['success'] = "you are now logged in";
                    header('location : index.php');

                }else{
                    array_push($errors,"Wrong username/password combination");
                }

           }

       }

            }
       if (isset($_GET['logout'])) {
           session_destroy();
           unset($_SESSION['Username']);
           header('location: login.php');
       }

  



