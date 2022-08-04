<?php 
$API_key = 'AIzaSyADr5BLQb1yjMtHftZIhhUEj96FvESVLMM';
$channelID = $_GET['id'];
$maxResults = '50';

$apiError = 'Video not found';
try{
  $apiData = @file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet%2C+id&playlistId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.'');
  if($apiData){
    $videolist = json_decode($apiData);
  } else {
    throw new Exception('Invalid API key or channel ID.');
  }
} catch(Exception $e){
    $apiError = $e->getMessage();
  }


  $category = '';
  
  if ($channelID == 'PLW_c2xKfxEIqpPCrfw_twlTSWYiiwvnq-'){
    $category = 'Sport';
  } 
  elseif ($channelID == 'RDqWAqMzB31lQ'){
    $category = 'Music';
  }
  elseif ($channelID == 'PL4WiRZw8bmXvAw7LyLC3LIuLDoagogZdb'){
    $category = 'Cooking';
  }
  elseif ($channelID == 'PLriZt3RmcI30iIudgKFINROyCK2Jmo4Z_'){
    $category = 'Movies';
  }
  elseif ($channelID == 'PLW_c2xKfxEIoV9Udl7Q9wzikc3P28d1X7'){
    $category = 'Games';
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link css -->
    <!-- <link rel="stylesheet" href="shows.css"> -->
    <link rel="stylesheet" href="shows.css?v=<?php echo time(); ?>">
    <!-- link icon in head -->
    <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="./assets/ventilateur.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/ventilateur.png">
    <title><?php echo $category;?></title>
</head>
<body class='mb-4 mx-3'>
    <!-- navbar -->
<div class="topnav">
  <a href="../index.php"><img src="../assets/ventilateur.png" width="30" alt="logo"> <b>BesTube</b></a>
  <a href="../index.php">Home</a>
  <a href="movies.php">Movies</a>
  <a href="tvshows.php">Music</a>
  <div class="dropdown">
    <button class="dropbtn">Categories</button>
    <div class="dropdown-content">
      <a href="sport.php">Sport</a>
      <a href="cooking.php">Cooking</a>
      <a href="gaming.php">Gaming</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">My account</button>
    <div class="dropdown-content">
      <!-- <a href="sign.php">Log in</a> -->
      <a href="../logout.php">Log out</a>
    </div>
  </div>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<div  class="container">
<div class='containervideo'>
<div class="row justify-content-around">

  <?php
  if(!empty($videolist->items)){
    foreach($videolist->items as $item){
      if(isset($item->snippet->resourceId->videoId)){
        ?>
        
        <div class="card m-5" style="width: 20rem;">
        <img width="85%" src="https://img.youtube.com/vi/<?php echo $item->snippet->resourceId->videoId; ?>/maxresdefault.jpg" class="card-img-top" alt=""></img>
        <div class="card-body">
        <h5 class="card-title"><?php echo $item->snippet->title; ?></h5>
        </div>
        </div>
       <?php
      }
    }
  } else{
    echo '<p class="error">'.$apiError.'</p>';
  }
  ?>
</div>
</div>
</div>

<footer class="footer p-2 pt-3 mt-5">
  <div class="footer-cols">
    <ul>
      <li><a href="./faq.php">FAQ</a></li>
    </ul>
    <ul>
      <li><a href="./contact.php">Contact Us</a></li>
    </ul>
    <ul>
    <li><a href="./auth/home.php">BesTube Originals</a></li>
    </ul>
    <ul>
      <li><a href="#">Copyright 2022 BesTube</a></li>
   </ul>
  </div>
</footer>
<!-- link script js -->
<script src="myscript.js"></script>
</body>
</html>