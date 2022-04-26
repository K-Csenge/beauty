<?php
require_once 'csatlakozas.php';
if(!$conn){
    exit("Connection error");
}

session_start();
if(!$_SESSION['id']){
    header("Location: index.php");
}
$queryUsers = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users"));
$queryPosts = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM posts"));

?>

<!DOCTYPE>
<html lang="hu">
<head>
    <title>Profilom</title>
    <link rel="stylesheet" href="css/mindenre.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<a href="index.php">Vissza</a>
<p>Felhasználók száma: <strong><?php echo $queryUsers ?></strong></p>
<p>Posztok száma: <strong><?php echo $queryPosts ?></strong></p>
</html>

