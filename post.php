<?php

session_start();
if (!$_SESSION['id']) {
    header("Location: index.php");
}

?>

<!DOCTYPE>
<html lang="hu">
<head>
    <title>Posztolás</title>
</head>
<body>
<form method="post">
    <label>
        <textarea name="text" cols="200" rows="8"></textarea>
    </label>
    <input type="submit" name="submit">
</form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    require_once 'csatlakozas.php';



    $sql = "INSERT INTO posts (userid, text, date) VALUES (?, ?, ?)";

    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "iss", $_SESSION['id'], $text, $date);
        $text = $_POST['text'];
        $date = date('Y-m-d H:i:s');

        mysqli_stmt_execute($stmt);
        header("Location: index.php");
    } else{
        echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
    }
}