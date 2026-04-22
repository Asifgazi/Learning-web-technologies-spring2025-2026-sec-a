<?php
session_start();

if(isset($_POST['submit'])){
    $email = trim($_REQUEST['email']);

    if($email == ""){
        echo "null email";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "invalid email";
    }
    elseif(isset($_SESSION['user']) && $email == $_SESSION['user']['email']){
        echo "Your password is: ".$_SESSION['user']['password'];
    }
    else{
        echo "email not found";
    }
}
?>