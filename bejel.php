<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Bejelentkezés</title>
    <link rel="stylesheet" href="css/mindenre.css">
    <link rel="stylesheet" href="css/spec.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/fo.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div id="nav"></div>
<h1>Bejelentkezés</h1>
<hr>

<form>
<label for="mail">Email:</label>
<input type="email" name="email" id="mail" class="form-control"><br>
    <div class="form-group">
<label for="jel">Jelszó:</label>
<input type="password" name="password" id="jel" class="form-control">
    </div>
<input type="submit" value="Küldés" class="btn btn-outline-primary">

</form>


<p>Nem regisztráltál még?</p>
<a href="regi.php">Regisztráció</a>






</body>
</html>