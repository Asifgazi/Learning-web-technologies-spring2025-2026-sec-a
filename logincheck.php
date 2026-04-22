<?php
session_start();

if(isset($_POST['submit'])){
    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);

    if($username == "" || $password == ""){
        echo "null input";
    }else{
        if(isset($_SESSION['user'])){
            if($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']){
                
                $_SESSION['username'] = $username;
                $_SESSION['status'] = true;

                setcookie('status', 'true', time()+3000, '/');

                header('location: home.php');
            }else{
                echo "invalid user";
            }
        }else{
            echo "no user found, signup first";
        }
    }
}else{
    header('location: login.php');
}
?>