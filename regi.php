
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztráció</title>
    <link rel="stylesheet" href="css/mindenre.css">
    <link rel="stylesheet" href="css/spec.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/fo.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div id="nav"></div>
<h1>Regisztráció</h1>
<hr>

<!-- This is a comment -->

<form action="regi_kuld.php" method="post">
    <label for="name">Név:</label>
    <input type="text" name="name" id="name" class="form-control"><br>

    Nem:
    <select name=neme class="form-control">
        <option value="0"> Lány </option>
        <option value="1"> Fiú </option>
        <option value="2"> Egyéb </option>
        <option value="3"> Nem szeretném megadni </option>
    </select>
    <br>

    <label for="mail">Email:</label>
    <input type="email" name="email" id="mail"class="form-control"><br>

    <label for="jel">Jelszó:</label>
    <input type="password" name="password" id="jel"class="form-control"> <br>
    <input type="submit" value="Küldés" class="btn btn-outline-primary">
    <input type="reset" value="Újra" class="btn btn-outline-primary">
</form>
</body>
</html>