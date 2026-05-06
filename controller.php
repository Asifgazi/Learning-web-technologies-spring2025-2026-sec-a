<?php
$conn = mysqli_connect("localhost", "root", "", "job_portal");

$data = json_decode($_POST['data']);
$action = $data->action;

if($action == "insert"){

    $name = $data->name;
    $company = $data->company;
    $contact = $data->contact;
    $username = $data->username;
    $password = $data->password;

    if($name == "" || $company == "" || $contact == "" || $username == "" || $password == ""){
        echo "null value found!";
    }else{

        $password = md5($password);

        $sql = "INSERT INTO employers VALUES('', '$name', '$company', '$contact', '$username', '$password')";
        mysqli_query($conn, $sql);

        echo "Employer inserted!";
    }
}

else if($action == "search"){

    $username = $data->username;

    $sql = "SELECT * FROM employers WHERE username LIKE '%$username%'";
    $result = mysqli_query($conn, $sql);

    $users = [];

    while($row = mysqli_fetch_assoc($result)){
        $users[] = $row;
    }

    echo json_encode($users);
}

else if($action == "delete"){

    $id = $data->id;

    $sql = "DELETE FROM employers WHERE id=$id";
    mysqli_query($conn, $sql);

    echo "Deleted!";
}

else if($action == "update"){

    $id = $data->id;
    $name = $data->name;

    if($name == ""){
        echo "null name!";
    }else{
        $sql = "UPDATE employers SET employer_name='$name' WHERE id=$id";
        mysqli_query($conn, $sql);
        echo "Updated!";
    }
}
?>