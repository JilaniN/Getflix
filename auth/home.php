<?php
date_default_timezone_set('Europe/Paris');
include_once('config.php');
include_once('comments.inc.home.php');
session_start();
?>

<!-- video comments page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link to css -->
    <!-- <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../home.css"> -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../home.css?v=<?php echo time(); ?>">
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
    <title>Default Player</title>
</head>
<body class="mb-4 mx-2">
    <!-- navbar -->
  <div class="topnav p-2">
    <a class="logo"  href="../index.php"><img src="../assets/ventilateur.png" width="30" alt="logo"> <b>BesTube</b></a>
    <a class="logoback" href="../index.php"><i class="fa-solid fa-backward fa-xl"></i></a>
  </div>
  <!-- video -->
  <h3 class="text-light text-center mb-2">Deep Sea Nuke</h3>
    <div class="video" id="player">
        <iframe width="854" height="480" src="https://www.youtube.com/embed/9tbxDgcv74c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

<!-- login logout -->
<?php
    echo "<form class='mt-4 mx-5 text-light' method='POST' action='".getLogin($pdo)."'>
        <span class='mx-1'> Log in here</span><br>
        <label for='username'></label>
        <input type='text' name='name' required value='' placeholder='Name'>
        <label for='password'></label>
        <input type='password' name='password' required value='' placeholder='Password'><br>
        <button type='submit' name='loginSubmit' class='mx-1'>Log in</button>
    </form>";
    echo "<form method='POST' action='".userLogout()."'>
        <button type='submit' name='logoutSubmit' class='buttonlogout'>Log out</button>
    </form>";

    if(isset($_SESSION['id'])){
        echo "<br><span class='mx-5'>  </span>";
    } else{
        echo " ";
    }
?>
<!-- comments section -->
<?php
    if(isset($_SESSION['id'])){
        echo " ";
        echo "<form method='POST' action='".setComments($pdo)."'>
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
        <input type='hidden' name='name' value='".$_SESSION['id']."'>
        <textarea name='message' id='message' required value='' placeholder='Leave your message here'></textarea><br>
        <button type='submit' name='commentSubmit' class='buttoncomment'>Comment</button>
        <br><span class='text-light' style='font-weight: 500; margin-left: 52px;'>Messages</span>
    </form>";
    } else{
        echo "<br>" . "<span class='mx-5'><i>You need an account to comment!</i></span><br><span class='text-light' style='font-weight: 500; margin-left: 52px;'>Messages</span>";
    }

    getComments($pdo);
?>
</div>



</body>
</html>