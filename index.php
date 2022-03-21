<?php

include "csatlakozas.php";

if(!$conn){
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div id="nav"></div>
<h1>Beauty tippek Csengétől</h1>
<hr>
<h3><b>Köszöntelek Beauty oldalamon!</b></h3> <br>
<p>Nem tudod, milyen smink illik hozzád?</p>
<p>Nem tudod, hogyan húzz tökéletes tusvonalat?</p>
<p>Nincs ötleted a ballagasi hajadhoz?</p>
<p><u>Segítek!</u></p>
<p>Beauty tippek tőlem, neked!♥</p>
<br><br>
<h3>Bejegyzések</h3>
<img src="adat/bej1.jpg" alt="smink" title="A smink helyes használatáról">

<?php while($query->fetch()): ?>
    <article>
        <hr>
        <p><?php echo $body?></p>
        <div class="details">
            <p><?php echo $date ?></p>
        </div>
        <hr>
    </article>
<?php endwhile?>
</body>
</html>
