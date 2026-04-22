<?php
session_start();

if(isset($_POST['submit'])){
    $old = trim($_REQUEST['old_pass']);
    $new = trim($_REQUEST['new_pass']);

    if($old == "" || $new == ""){
        echo "null password";
    }
    elseif(strlen($new) < 4){
        echo "password must be at least 4 characters";
    }
    elseif($old != $_SESSION['user']['password']){
        echo "wrong old password";
    }
    else{
        $_SESSION['user']['password'] = $new;
        echo "password changed";
    }
}
?>