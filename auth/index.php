<?php
date_default_timezone_set('Europe/Paris');
include_once('config.php');
include_once('comments.inc.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    echo "<form method='POST' action='".getLogin($pdo)."'>
        Username: <input type='text' name='uid'>
        Password: <input type='password' name='pwd'><br>
        <button type='submit' name='loginSubmit'>Log in</button>
    </form>";
    echo "<form method='POST' action='".userLogout()."'>
        <button type='submit' name='logoutSubmit'>Log out</button>
    </form>";

    if(isset($_SESSION['id'])){
        echo "You are logged in";
    } else{
        echo "You are not logged in";
    }

?>
<br>

    <video width="320" height="240" controls>
        <source src="movie.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support.
    </video>
    <br>
<?php
    if(isset($_SESSION['id'])){
        echo "You are logged in";
        echo "<form method='POST' action='".setComments($pdo)."'>
        <input type='hidden' name='uid' value='".$_SESSION['id']."'>
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
        <textarea name='message' id='message'></textarea><br>
        <button type='submit' name='commentSubmit'>Comment</button>
    </form>";
    } else{
        echo "<br>" . "You need an account to comment!";
    }

    getComments($pdo);
?>
</body>
</html>