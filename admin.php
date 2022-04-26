<?php
require_once 'csatlakozas.php';
$queryUsers = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users"));
$queryPosts = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM posts"));
echo "Felhasznalok szama: $queryUsers<br>";
echo "Posztok szama: $queryPosts<br>";
