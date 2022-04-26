<?php

require_once 'csatlakozas.php';
if(!$conn){
    exit("Connection error");
}

session_start();
if(!$_SESSION['id']){
    header("Location: index.php");
}

$id = $_SESSION['id'];
$query = $conn->prepare("SELECT first_name, last_name, email, gender FROM users WHERE id='$id'");
$query->execute();
$query->bind_result( $fname, $lname, $email, $gender);
$query->fetch();

?>

<!DOCTYPE>
<html lang="hu">
<head>
    <title>Profilom</title>
    <link rel="stylesheet" href="css/mindenre.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<a href="index.php">Vissza</a>
<p>Nev: <strong><?php echo $lname." ".$fname ?></strong></p>
<p>Email: <strong><?php echo $email ?></strong></p>
</html>

