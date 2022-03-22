
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztráció</title>
    <link rel="stylesheet" href="css/mindenre.css">
    <link rel="stylesheet" href="css/spec.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/fo.js"></script>
</head>
<body>
<div class="nav"></div>
<h1>Regisztráció</h1>
<hr>


<form action="" method="post">
    <label for="name">Név:</label>
    <input type="text" name="name" id="name" class="form-control"><br>

    Nem:
    <select name=neme class="form-control">
        <option value="0"> Lány </option>
        <option value="1"> Fiú </option>
        <option value="2"> Egyéb </option>
        <option value="3"> Nem szeretném megadni </option>
    </select>
    <br>


    <label for="mail">Email:</label>
    <input type="email" name="email" id="mail"class="form-control"><br>

    <label for="jel">Jelszó:</label>
    <input type="password" name="password" id="jel"class="form-control"> <br>
    <input type="submit" value="Küldés" class="btn btn-outline-primary">
    <input type="reset" value="Újra" class="btn btn-outline-primary">
</form>
</body>
</html>

<?php

require_once "csatlakozas.php";

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