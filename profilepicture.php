<?php
session_start();

if(!isset($_COOKIE['status'])){
    header('location: login.php');
}
?>

<form method="post" action="pictureCheck.php" enctype="multipart/form-data">
    Select Image: <input type="file" name="myfile"/> <br>
    <input type="submit" name="submit" value="Upload"/>
</form>