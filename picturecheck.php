<?php
session_start();

if(isset($_POST['submit'])){
    if($_FILES['myfile']['name'] == ""){
        echo "no file selected";
    }else{
        $name = $_FILES['myfile']['name'];
        $tmp  = $_FILES['myfile']['tmp_name'];

        move_uploaded_file($tmp, "upload/".$name);

        $_SESSION['user']['pic'] = $name;

        header('location: profile.php');
    }
}
?>