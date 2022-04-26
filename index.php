<?php

require_once "csatlakozas.php";
if (!$conn) {
    return;
}

$query = $conn->prepare("SELECT posts.id, username, text, date FROM posts INNER JOIN users ON posts.userid = users.id;");
$query->execute();
$query->bind_result($post_id, $username, $body, $date);

session_start();

$_SESSION['page'] = "index";

if(!isset($_SESSION['id'])){
    session_destroy();
}



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
    <h3>Köszöntelek<?php if(isset($_SESSION['id'])) echo " ".$_SESSION['fname']." ".$_SESSION['lname'][0].". !" ?></h3>
    <hr class="animated">
    <ul>
        <li>Nem tudod, milyen smink illik hozzád?</li>
        <li>Nem tudod, hogyan húzz tökéletes tusvonalat?</li>
        <li>Nincs ötleted a ballagasi hajadhoz?</li>
    </ul>
    <p><u>Segítek!</u></p>
    <p>Beauty tippek tőlem, neked!♥</p>
</div>
<div id="posts">
    <div id="post-header">
        <h3>Bejegyzések</h3>
    </div>
    <?php if(isset($_SESSION['id']) && isset($_SESSION['admin'])) { ?>
        <a href="post.php"> Postolas</a>
    <?php } ?>
    <?php while ($query->fetch()): ?>
        <article class="bottom-fade">
            <hr>
            <div id="post-content">
                <p><?php echo $body ?></p>
                <div class="details">
                    <p><strong><?php echo $date ?></strong>, Posztolta: <i><?php echo $username ?></i></p>
                </div>
            </div>
            <hr>
        </article>
    <?php endwhile ?>
</div>

</body>
</html>
