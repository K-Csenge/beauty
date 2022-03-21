<?php

include "csatlakozas.php";

if(!$conn){
    return;
}

if(isset($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['neme'];

    $test_email_stmt = "SELECT * FROM users WHERE email='$email';";
    $query1 = mysqli_num_rows(mysqli_query($conn, $test_email_stmt));

    if($query1 > 0){
        echo "Ez az email mar foglalt";
        echo "User: $name, with credentials: $email, $password, $gender";
        echo $query1;
        return;
    }
    $insert = mysqli_query($conn,"INSERT INTO users VALUES('' , '$name','$gender', '$email', '$password', 'n');");
    echo "User inserted: $name, with credentials: $email, $password, $gender";
    if($insert){
        header("Location: index.php");
    }

}
