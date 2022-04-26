<?php
session_start();
$_SESSION['page'] = "login";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Bejelentkezés</title>
    <link rel="stylesheet" href="css/mindenre.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/fo.js"></script>
</head>
<body>
<div class="nav"></div>
<h1>Bejelentkezés</h1>
<hr>
<div class="form-container">
    <form method="post">
        <label for="mail">Email:</label>
        <input type="email" name="email" id="mail" class="form-control" required><br>
        <div class="form-group">
            <label for="jel">Jelszó:</label>
            <input type="password" name="password" id="jel" class="form-control" required>
        </div>
        <input type="submit" name="submit" value="Küldés" class="btn btn-outline-primary">
    </form>
</div>


<p>Nem regisztráltál még?</p>
<a href="regi.php">Regisztráció</a>

</body>
</html>

<?php


if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    require_once 'csatlakozas.php';


    $stmt = "SELECT * FROM users WHERE email='$email'";
    $query = mysqli_query($conn, $stmt);
    $resultCount = mysqli_num_rows($query);

    if($resultCount == 1){
        $userAssoc = mysqli_fetch_assoc($query);
        if($userAssoc['password'] == $pass){
            $_SESSION['id'] = $userAssoc['id'];
            $_SESSION['fname'] = $userAssoc['first_name'];
            $_SESSION['lname'] = $userAssoc['last_name'];
            if($userAssoc['admin'] == 'y')
                $_SESSION['admin'] = true;
            header("Location: index.php");
        }
        else{
            echo "Wrong pass";
        }
    }
    else{
        echo "$email not found in database";
    }
}