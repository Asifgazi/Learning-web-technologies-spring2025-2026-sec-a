<?php
session_start();

if(!isset($_COOKIE['status']) || !isset($_SESSION['status'])){
    header('location: login.php');
}
?>

<h1>Welcome <?php echo $_SESSION['username']; ?></h1>

<a href="profile.php">Profile</a> |
<a href="edit.php">Edit Profile</a> |
<a href="profilePicture.php">Change Picture</a> |
<a href="changePassword.php">Change Password</a> |
<a href="logout.php">Logout</a>