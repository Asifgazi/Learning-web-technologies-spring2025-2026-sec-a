<?php
if(isset($_POST['submit'])){
    $name = $_REQUEST['name'];

    if($name == ""){
        echo "null input";
    }else{
        echo "Name: ".$name;
    }
}else{
    echo "invalid request!";
}
?>