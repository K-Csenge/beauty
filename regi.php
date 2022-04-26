<?php
session_start();
$_SESSION['page'] = "register";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztráció</title>
    <link rel="stylesheet" href="css/mindenre.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/fo.js"></script>
</head>
<body>
<div class="nav"></div>
<h1>Regisztráció</h1>
<hr>


<form action="" method="post">
    <label for="uname">Felhasználónév:</label>
    <input type="text" name="uname" id="uname">
    <label for="lname">Vezetéknév:</label>
    <input type="text" name="lname" id="lname">
    <label for="fname">Keresztnév:</label>
    <input type="text" name="fname" id="fname">
    <label for="neme">Nem:
        <select name=neme class="form-control">
            <option value="0"> Lány</option>
            <option value="1"> Fiú</option>
            <option value="2"> Egyéb</option>
            <option value="3"> Nem szeretném megadni</option>
        </select>
    </label>

    <label for="mail">Email:</label>
    <input type="email" name="email" id="mail" class="form-control" required>
    <label for="jel">Jelszó:</label>
    <input type="password" name="password" id="jel" class="form-control" required>
    <input type="submit" value="Küldés" name="submit" class="btn btn-outline-primary">
    <input type="reset" value="Újra" class="btn btn-outline-primary">
</form>
</body>
</html>

<?php

require_once "csatlakozas.php";

if (!$conn) {
    exit("Connection error");
}

if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['neme'];

    if (preg_match('/\s/', $uname)) {
        echo "Ne hasznalj szokozt a felhasznalo nevben";
    } else {
        $test_email_stmt = "SELECT * FROM users WHERE email='$email';";
        $query1 = mysqli_num_rows(mysqli_query($conn, $test_email_stmt));

        if ($query1 > 0) {
            echo "Ez az email mar foglalt";
            echo "User: $uname, with credentials: $email, $password, $gender";
            echo $query1;
            return;
        } else {
            $insert = mysqli_query($conn, "INSERT INTO users (username, first_name, last_name, gender, email, password, admin) VALUES('$uname', '$fname', '$lname','$gender', '$email', '$password', 'n');");
            echo "User inserted: $uname, with credentials: $email, $password, $gender";
            if ($insert) {
                $_SESSION['uname'] = $uname;
                $_SESSION['fname'] = $fname;
                $_SESSION['lname'] = $lname;
                header("Location: index.php");
            }
        }
    }
}