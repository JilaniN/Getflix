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
    <!-- link to css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../home.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- link -->
    <script src="https://kit.fontawesome.com/6c36406174.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- link icon image -->
    <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="../assets/ventilateur.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/ventilateur.png">
    
    <title>Play</title>
</head>
<body>
    <!-- navbar -->
  <div class="topnav p-2">
    <a class="logo"  href="../index.php"><img src="../assets/ventilateur.png" width="30" alt="logo"> <b>BesToBe</b></a>
  </div>
</div>

    
<?php
    echo "<form method='POST' action='".getLogin($pdo)."'>
        Username: <input type='text' name='name'>
        Password: <input type='password' name='password'><br>
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
<!-- <br>

    <video width="420" height="400" controls>
        <source src="movie.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support.
    </video>
    <br> -->
    
    <div class="ratio ratio-16x9" id="player">
        <!-- <iframe src="https://www.youtube.com/embed/vlDzYIIOYmM" title="YouTube video" allowfullscreen></iframe> -->
            <iframe width="400" height="400" src="https://www.youtube.com/embed/f6kzypYDLRg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

<?php
    if(isset($_SESSION['id'])){
        echo "You are logged in";
        echo "<form method='POST' action='".setComments($pdo)."'>
        <input type='hidden' name='name' value='".$_SESSION['id']."'>
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