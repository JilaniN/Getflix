<?php
date_default_timezone_set('Europe/Paris');
include_once('config.php');
include_once('comments.inc.php');
session_start();
?>

<?php
$item= $_GET['id'];

$API_key = 'AIzaSyADr5BLQb1yjMtHftZIhhUEj96FvESVLMM';

$apiError = 'Video not found';
try{
  $apiData = @file_get_contents('https://www.googleapis.com/youtube/v3/videos?id='.$item.'&key='.$API_key.'&part=snippet');
  if($apiData){
    $videolist = json_decode($apiData);
  } else {
    throw new Exception('Invalid API key or channel ID.');
  }
} catch(Exception $e){
    $apiError = $e->getMessage();
  }

?>

<!-- video comments page -->
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
    <title><?php echo $videolist->items[0]->snippet->title; ?></title>
</head>
<body class="mb-4 mx-2">
    <!-- navbar -->
  <div class="topnav p-2">
    <a class="logo"  href="../index.php"><img src="../assets/ventilateur.png" width="30" alt="logo"> <b>BesToBe</b></a>
  </div>
</div>
<h1 class="text-light">
<?php echo $videolist->items[0]->snippet->title;  ?>
       
</h1>
   <!-- <br>
    <video width="420" height="400" controls>
        <source src="movie.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support.
    </video>
    <br> -->
    <div class="video ratio ratio-16x9" id="player">
        <iframe width="200" height="200" src="https://www.youtube.com/embed/<?php echo $item; ?>?autoplay=1" title="YouTube video" allowfullscreen frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
      </div>

      <!-- Description -->
<div class="card bg-dark text-light ms-4 me-4">
  <div class="card-body p-3" id="description">
    <p>
  <?php echo $videolist->items[0]->snippet->description;  ?></p>
  </div>
</div>
    <div class="containercomment">

<!-- login logout -->
<?php
    echo "<form class='mt-4 mx-5 text-light' method='POST' action='".getLogin($pdo)."'>
        <span> Log in here</span><br>
        <label for='username'></label>
        <input type='text' name='name' required value='' placeholder='Name'>
        <label for='password'></label>
        <input type='password' name='password' required value='' placeholder='Password'><br>
        <button type='submit' name='loginSubmit'>Log in</button>
    </form>";
    echo "<form method='POST' action='".userLogout()."'>
        <button type='submit' name='logoutSubmit' class='mx-5'>Log out</button>
    </form>";

    if(isset($_SESSION['id'])){
        echo "<br><span class='mx-5'>Leave your message here.</span>";
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
        <textarea name='message' id='message' placeholder='Comment'></textarea><br>
        <button type='submit' name='commentSubmit' class='mx-5'>Comment</button>
    </form>";
    } else{
        echo "<br>" . "<span class='mx-5'><i>You need an account to comment!</i></span><br><span class='mx-5 text-light' style='font-weight: 500;'>Messages</span>";
    }

    getComments($pdo);
?>
</div>
</body>
</html>