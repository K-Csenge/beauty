<?php

require_once "csatlakozas.php";

if (!$conn) {
    return;
}

$query = $conn->prepare("SELECT * FROM posts");
$query->execute();
$query->bind_result($post_id, $date, $body);

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Főoldal</title>
    <link rel="stylesheet" href="css/mindenre.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/fo.js"></script>
</head>
<body>
<div class="nav"></div>
<div id="intro">
    <h3><b>Köszöntelek</b></h3>
    <ul>
        <li>Nem tudod, milyen smink illik hozzád?</li>
        <li>Nem tudod, hogyan húzz tökéletes tusvonalat?</li>
        <li>Nincs ötleted a ballagasi hajadhoz?</li>
    </ul>
    <p><u>Segítek!</u></p>
    <p>Beauty tippek tőlem, neked!♥</p>
</div>
<div id="post-header">
    <h3>Bejegyzések</h3>
</div>


<?php while ($query->fetch()): ?>
    <article>
        <hr>
        <p><?php echo $body ?></p>
        <div class="details">
            <p><?php echo $date ?></p>
        </div>
        <hr>
    </article>
<?php endwhile ?>
</body>
</html>
