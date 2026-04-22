<?php
session_start();

if(isset($_POST['submit'])){
    $username = trim($_REQUEST['username']);
    $email = trim($_REQUEST['email']);

    if($username == "" || $email == ""){
        echo "null input";
    }
    elseif(strlen($username) < 3){
        echo "username must be at least 3 characters";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "invalid email";
    }
    else{
        $_SESSION['user']['username'] = $username;
        $_SESSION['user']['email'] = $email;

        header('location: profile.php');
    }
}
?>