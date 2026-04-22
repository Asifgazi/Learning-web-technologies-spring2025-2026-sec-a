<?php
session_start();

if(!isset($_COOKIE['status'])){
    header('location: login.php');
}
?>

<form method="post" action="changePasswordCheck.php">
    Old Password: <input type="password" name="old_pass"/> <br>
    New Password: <input type="password" name="new_pass"/> <br>

    <input type="submit" name="submit" value="Change"/>
</form>