<?php
session_start();

if(!isset($_COOKIE['status'])){
    header('location: login.php');
}
?>

<h2>Profile</h2>

Username: <?php echo $_SESSION['user']['username']; ?> <br>
Email: <?php echo $_SESSION['user']['email']; ?> <br>

<?php if(isset($_SESSION['user']['pic'])){ ?>
<img src="upload/<?php echo $_SESSION['user']['pic']; ?>" width="100"/>
<?php } ?>

<br><br>
<a href="home.php">Back</a>