<?php
session_start();

if(isset($_POST['submit'])){
    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);
    $email    = trim($_REQUEST['email']);

    if($username == "" || $password == "" || $email == ""){
        echo "null input";
    }
    elseif(strlen($username) < 3){
        echo "username must be at least 3 characters";
    }
    elseif(strlen($password) < 4){
        echo "password must be at least 4 characters";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "invalid email";
    }
    else{
        $_SESSION['user'] = [
            'username'=>$username,
            'password'=>$password,
            'email'=>$email
        ];

        header('location: login.php');
    }
}else{
    header('location: signup.php');
}
?>