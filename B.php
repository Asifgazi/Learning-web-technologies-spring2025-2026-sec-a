<?php
if(isset($_POST['submit'])){
    $name = $_REQUEST['name'];

    if($name == ""){
        echo "null input";
    }else{
        echo "Name: ".$name;
    }
}
?>

<form method="post">
    Name: <input type="text" name="name">
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
    $name = $_REQUEST['name'];

    if($name == ""){
        echo "null input";
    }else{
        echo "Name: ".$name;
    }
}
?>

<form method="post">
    Name: <input type="text" name="name" value="<?php if(isset($name)){echo $name;}?>">
    <input type="submit" name="submit">
</form>