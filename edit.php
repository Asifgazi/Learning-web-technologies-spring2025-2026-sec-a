<?php
session_start();

if(!isset($_COOKIE['status'])){
    header('location: login.php');
}
?>

<form method="post" action="editCheck.php">
    Username: <input type="text" name="username" value="<?php echo $_SESSION['user']['username']; ?>"/> <br>
    Email: <input type="email" name="email" value="<?php echo $_SESSION['user']['email']; ?>"/> <br>

    <input type="submit" name="submit" value="Update"/>
</form>