<?php
session_start();
$_SESSION['page'] = "aboutus";
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Rólunk</title>
    <link rel="stylesheet" href="css/mindenre.css">
    <link rel="stylesheet" href="css/rolunk.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/fo.js"></script>
</head>
<body>
<div class="nav"></div>
<div class="bottom-fade">
    <h1>Rólunk</h1>
    <hr>
</div>
<div id="container">
    <p>Hellóka! Mi vagyunk a Hegedűsék. A Bolyai TGK végzős informatika szakos tanulói vagyunk. Reméljük tetszik a
        Beauty
        oldalunk! ;) </p>
    <h2>Staff</h2>
    <ul id="staff-list">
        <li>Beauty professzionalista <i>(és weblap designer)</i>: <strong>Csenge</strong></li>
        <li>Backend fejlesztő <i>(és beauty teszt alany)</i>: <strong>Joshua</strong></li>
    </ul>
</div>

<div id="img-cont">
    <p>Itt vagyunk mi:</p>
    <img src="adat/mi.jpg" alt="Két személy, egy fiú és egy lány, egyforma ingben. (Szerelmes pár)" title="CCC Győztesei">
</div>

</body>
</html>